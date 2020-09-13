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
//----------------------------------Route Admin Categories-------------------------------//
Route::get('/category', 'CategoryController@index')->name('admin.categories.index');
Route::get('/category/create', 'CategoryController@create')->name('admin.categories.create');
Route::post('/category', 'CategoryController@store')->name('admin.categories.store');
Route::get('/category/{category}/edit', 'CategoryController@edit')->name('admin.categories.edit');
Route::patch('/category/{category}', 'CategoryController@update')->name('admin.categories.update');
Route::delete('/category/{category}', 'CategoryController@destroy')->name('admin.categories.destroy');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
