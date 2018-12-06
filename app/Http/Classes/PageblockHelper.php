<?php
/**
 * Created by PhpStorm.
 * User: jdeli
 * Date: 4-12-2018
 * Time: 21:59
 */
namespace App\Http\Classes;

class PageblockHelper
{
    public static function getRenderableFields($fields) {
        $renderableFields = array();

        foreach ($fields as $field) {

            if (empty($renderableFields[$field['type']])) {
                $renderableFields[$field['type']] = $field['value'];
            }
        }

        return $renderableFields;
    }
}