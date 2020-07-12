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

/*Route::get('/admin', function () {
    return view('layouts.admin.master');
});
*/

Route::get('/', function () {
    return view('welcome');
});
////////////dibikin pertanyaancontroller
// pertanyaan masih belom bikin pagenya
Route::get("/pertanyaan", "PertanyaanController@index");
Route::get("/pertanyaan/create", "PertanyaanController@create");
Route::post("/pertanyaan", "PertanyaanController@store");
Route::get("/pertanyaan/{id}", "PertanyaanController@show");
Route::get("/pertanyaan/{id}/edit", "PertanyaanController@edit");
Route::put("/pertanyaan/{id}", "PertanyaanController@update");
Route::delete("/pertanyaan/{id}", "PertanyaanController@destroy");

//jawaban
Route::post("/jawaban/{pertanyaan_id}", "JawabanController@store");

////////////////////////////////////////////////////////

Auth::routes();
Route::group(['middleware' => 'auth' ,'users' => 'danielchandra1.dc@gmail.com'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/admin/dashboard', 'AdminController@dashboard');
	Route::get('/admin/pertanyaan', 'AdminController@pertanyaan');
	Route::get('/admin/jawaban', 'AdminController@jawaban');
	Route::resource('/admin/category','CategoryController');
	Route::resource('/admin/tag','TagController');
});

//Route::get('/admin/category', 'AdminController@category');

//Route::get('/admin/tag', 'AdminController@tag');


//////wsyiwyg
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
	\UniSharp\LaravelFilemanager\Lfm::routes();
});
/////