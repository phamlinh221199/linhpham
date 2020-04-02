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
    return view('timviec.index');
});

Route::get('ketqua', function () {
    return view('timviec.ketqua');
});

Route::get('chitiet', function () {
    return view('timviec.chitietviec');
});