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
Route::get('/admin', 'Admin\AdminCategoryController@index')->name('admin.categories.index');
Route::get('/admin/categories/create', 'Admin\AdminCategoryController@create')->name('admin.categories.create');
Route::post('/admin/categories', 'Admin\AdminCategoryController@store')->name('admin.categories.store');
Route::get('/admin/categories/{category}/edit', 'Admin\AdminCategoryController@edit')->name('admin.categories.edit');
Route::patch('/admin/categories/{category}', 'Admin\AdminCategoryController@update')->name('admin.categories.update');
Route::delete('/admin/categories/{category}', 'Admin\AdminCategoryController@destroy')->name('admin.categories.destroy');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
