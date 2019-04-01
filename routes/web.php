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

Route::get('/', function () {
    return view('welcome');
});

Route::get('abc', function () {
    echo "1 2 3 4 5 6 7";
});

Route::get("", function () {
    //di chuyển đến route gv
    return redirect(url('gv'));
});
Route::group(array("prefix" => "gv"), function () {
//list gv
    Route::get("", "GiaoVienController@listGV");
//edit gv
    Route::get("edit/{id}", "GiaoVienController@edit");
//do edit gv
    Route::post("edit/{id}", "GiaoVienController@do_edit");
//add gv
    Route::get("add", "GiaoVienController@add");
//do add gv
    Route::post("add", "GiaoVienController@do_add");
/// delete gv
    Route::get("delete/{id}", "GiaoVienController@delete");
});
