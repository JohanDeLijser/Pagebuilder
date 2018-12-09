<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/backend', function () {
    return view('backend');
});

Auth::routes();

Route::redirect('/', 'home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/backend', 'BackendController@index')->name('backend');

Route::post('savebackend', 'BackendController@postSaveBackendForm');
Route::post('addpageblock', 'BackendController@postAddPageblock');
Route::get('deletePageblock', 'BackendController@postDeletePageblock');



