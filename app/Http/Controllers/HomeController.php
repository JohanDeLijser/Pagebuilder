<?php

namespace App\Http\Controllers;

use App\Http\Models\PageblockModel;

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
        $activePageblocks = PageblockModel::getAllActivePageblocks();

        return view('home')->with('activePageblocks', $activePageblocks);
    }
}
