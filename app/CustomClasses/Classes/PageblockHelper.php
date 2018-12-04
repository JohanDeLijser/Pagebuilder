<?php
/**
 * Created by PhpStorm.
 * User: jdeli
 * Date: 4-12-2018
 * Time: 21:59
 */
namespace App\CustomClasses\Classes;

class PageblockHelper
{

    public static function getAllActivePageblocks() {
        $activePageblocks = array('bannerBlock', 'contentBlock');

        return $activePageblocks;
    }
}