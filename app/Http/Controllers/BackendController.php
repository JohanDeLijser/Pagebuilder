<?php

namespace App\Http\Controllers;

use App\Http\Models\PageblockModel;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the pagebuilder backend.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPageblocks = PageblockModel::getAllPageblocks();
        $allActivePageblocks = PageblockModel::getAllActivePageblocks();

        return view('backend')->with('allPageblocks', $allPageblocks)->with('allActivePageblocks', $allActivePageblocks);
    }

    public function postSaveBackendForm() {
        PageblockModel::saveActivePageblocks($_POST);

        $this->index();
    }

    public function postAddPageblock() {

    }
}
