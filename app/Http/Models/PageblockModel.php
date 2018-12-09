<?php

namespace App\Http\Models;

use Illuminate\Support\Facades\DB;
use App\Http\Classes\Pageblock;

class PageblockModel
{
    /**
     * Gets all available pageblocks and its fields
     *
     * @return array
     */
    public static function getAllPageblocks()
    {
        $allPageblocks = array();
        $pageblocks = DB::table('pageblocks')->get();

        foreach ($pageblocks as $pageblock) {
            $allPageblocks[] = new Pageblock($pageblock->id, $pageblock->name, $pageblock->type, self::getPageblockFields($pageblock->id));
        }

        return $allPageblocks;
    }

    /**
     * Gets pageblock by id
     *
     * @param $pageblockid
     * @return array
     */
    public static function getPageblock($pageblockid)
    {
        $fullPageblock = array();
        $pageblock = DB::table('pageblocks')->where('id', $pageblockid)->get();
        $fullPageblock[] = new Pageblock($pageblock[0]->id, $pageblock[0]->name, $pageblock[0]->type, self::getPageblockFields($pageblock[0]->id));

        return $fullPageblock;
    }

    /**
     * Gets all the pageblock fields by pageblockID
     *
     * @param $pageblockID
     * @return object
     */
    public static function getPageblockFields($pageblockID) {
        $fields = DB::table('pageblockfields')->where('pageblockid', $pageblockID)->get();

        return $fields;
    }

    /**
     * Gets all the pageblock field by fieldid
     *
     * @param $pageblockID
     * @return object
     */
    public static function getPageblockField($fieldid) {
        $fields = DB::table('pageblockfields')->where('id', $fieldid)->get();

        return $fields;
    }

    /**
     * Get all active pageblocks by getting the homepageblocks
     */
    public static function getAllActivePageblocks()
    {
        $activePageblocks = array();
        $pageblocks = DB::table('homepageblocks')->get();

        foreach ($pageblocks as $key => $pageblock) {
            $standardPageblock = self::getPageblock($pageblock->pageblockid)[0]->pageblock;
            $fieldValues = self::getFieldValues($pageblock->id);

            $activePageblocks[$key]['id'] = $pageblock->id;
            $activePageblocks[$key]['pageblockid'] = $pageblock->pageblockid;
            $activePageblocks[$key]['order'] = $pageblock->order;
            $activePageblocks[$key]['name'] = $standardPageblock['name'];
            $activePageblocks[$key]['type'] = $standardPageblock['type'];

            foreach ($fieldValues as $feildvalueKey => $fieldValue) {
                $standardField = self::getPageblockField($fieldValue->fieldid)[0];

                $activePageblocks[$key]['fields'][$standardField->fieldname]['id'] = $fieldValue->id;
                $activePageblocks[$key]['fields'][$standardField->fieldname]['fieldid'] = $fieldValue->fieldid;
                $activePageblocks[$key]['fields'][$standardField->fieldname]['fieldname'] = $standardField->fieldname;
                $activePageblocks[$key]['fields'][$standardField->fieldname]['name'] = $standardField->name;
                $activePageblocks[$key]['fields'][$standardField->fieldname]['type'] = $standardField->type;
                $activePageblocks[$key]['fields'][$standardField->fieldname]['value'] = $fieldValue->value;
            }
        }

        usort($activePageblocks, function($a, $b) { return $a['order'] - $b['order']; });

        return $activePageblocks;
    }

    /**
     * Gets the amount of active pageblocks
     *
     * @return int
     */
    public static function getAmountOfActivePageblocks() {
        $count = DB::table('homepageblocks')->count();

        return $count;
    }

    /**
     * Get all fieldvalues by homepageblockid
     *
     * @param $homepageblockid
     * @return \Illuminate\Support\Collection
     */
    public static function getFieldValues($homepageblockid) {
        $fieldvalues = DB::table('fieldvalues')->where('homepageblockid', $homepageblockid)->get();

        return $fieldvalues;
    }

    /**
     * Gets a field by its name
     *
     * @param $fieldname
     * @return mixed
     */
    public static function getFieldIdByFieldName($fieldname) {
        $fieldid = DB::table('pageblockfields')->where('fieldname', $fieldname)->get()[0];
        return $fieldid->id;
    }

    /**
     * Saves all active pageblock and their changes
     *
     * @param $data
     */
    public static function saveActivePageblocks($data) {

        foreach ($data as $name => $item) {
            $homepageblockidstring = substr($name, 0, strpos($name, "-"));
            $homepageblockid = intval($homepageblockidstring);
            $fieldName = str_replace($homepageblockidstring . '-', '', $name);

            if ($fieldName === 'order') {
                self::setPageblockOrder($homepageblockid, $item);
            } else {
                $fieldid = self::getFieldIdByFieldName($fieldName);

                $exists = DB::table('fieldvalues')->where('homepageblockid', $homepageblockid)->where('fieldid', $fieldid)->exists();

                if ($exists) {
                    DB::table('fieldvalues')->where('homepageblockid', $homepageblockid)->where('fieldid', $fieldid)->update(['value' => $item]);
                } else {
                    DB::table('fieldvalues')->insert(['homepageblockid' => $homepageblockid, 'fieldid' => $fieldid, 'value' => $item]);
                }
            }
        }
    }

    /**
     * Adds new pageblock to the homepage and backend
     *
     * @param $data
     */
    public static function addNewPageblock($data) {
        $count = self::getAmountOfActivePageblocks();
        $pageblockid = intval($data['all-available-pageblocks-select']);

        DB::table('homepageblocks')->insert(['pageblockid' => $pageblockid, 'order' => $count + 1]);
    }

    /**
     * Set homepageblock order
     *
     * @param $homepageblockid
     * @param $posdata
     */
    public static function setPageblockOrder($homepageblockid, $posdata) {
        $oldPos = DB::table('homepageblocks')->where('id', $homepageblockid)->get()[0]->order;
        $newPos = intval($posdata);

        if ($oldPos !== $newPos) {
            $replacingBlockId = DB::table('homepageblocks')->where('order', $newPos)->get()[0]->id;

            DB::table('homepageblocks')->where('id', $homepageblockid)->update(['order' => $newPos]);
            DB::table('homepageblocks')->where('id', $replacingBlockId)->update(['order' => $oldPos]);
        }
    }

    /**
     * Removes pageblock at which the delete button was clicked
     *
     * @param $homepageblockid
     */
    public static function removePageblockFromHome($homepageblockid) {
        $homepageblockid = intval($homepageblockid['id']);

        DB::table('homepageblocks')->where('id', $homepageblockid)->delete();
        DB::table('fieldvalues')->where('homepageblockid', $homepageblockid)->delete();
    }
}