<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('layouts.admin.master');
});


Route::get('/admin/dashboard', 'AdminController@dashboard');

//Route::get('/admin/category', 'AdminController@category');

//Route::get('/admin/tag', 'AdminController@tag');

Route::get('/admin/pertanyaan', 'AdminController@pertanyaan');

Route::get('/admin/jawaban', 'AdminController@jawaban');

Route::resource('/admin/category','CategoryController');

Route::resource('/admin/tag','TagController');