<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomClasses\Classes\PageblockHelper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageblocks = PageblockHelper::getAllActivePageblocks();

        return view('home')->with('pageblocks', $pageblocks);
    }
}
