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

Route::get('/admin/dashboard', function () {
    return view('layouts.admin.dashboard');
});

Route::get('/admin/category', function () {
    return view('layouts.admin.category');
});

Route::get('/admin/tag', function () {
    return view('layouts.admin.tag');
});

Route::get('/admin/pertanyaan', function () {
    return view('layouts.admin.pertanyaan');
});

Route::get('/admin/jawaban', function () {
    return view('layouts.admin.jawaban');
});