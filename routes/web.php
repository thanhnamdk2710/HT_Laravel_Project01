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

Route::group([ 'prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
	Route::get('/', 'HomeController@index')->name('dashboard');

	//CRUD Category
	Route::get('/categories', 'CategoryController@index')->name('categories.index');
	Route::put('/categories/{id}', 'CategoryController@destroy')->name('categories.destroy');
});
