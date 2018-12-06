<?php

namespace App\Http\Classes;

class Pageblock
{
    public $pageblock;

    function __construct($ID, $name, $type, $fields)
    {
        $this->pageblock['id'] = $ID;
        $this->pageblock['name'] = $name;
        $this->pageblock['type'] = $type;
        $this->pageblock['fields'] = $fields;
    }

    function getPageblock() {
        return $this->pageblock;
    }
}