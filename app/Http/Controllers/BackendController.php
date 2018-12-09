<?php

namespace App\Http\Controllers;

use App\Http\Models\PageblockModel;
use Illuminate\Support\Facades\Route;

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
        $amountOfActivePageblocks = PageblockModel::getAmountOfActivePageblocks();

        return view('backend')->with('allPageblocks', $allPageblocks)->with('allActivePageblocks', $allActivePageblocks)->with('amountOfActivePageblocks', $amountOfActivePageblocks);
    }

    /**
     * Handles save form post
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postSaveBackendForm() {
        PageblockModel::saveActivePageblocks($_POST);

        return redirect()->route('backend');
    }

    /**
     * Handles add page block form
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddPageblock() {
        PageblockModel::addNewPageblock($_POST);

        return redirect()->route('backend');
    }

    /**
     * Handles the delete block button
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDeletePageblock() {
        PageblockModel::removePageblockFromHome($_GET);

        return redirect()->route('backend');
    }
}
