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
	Route::get('categories', 'CategoryController@index')->name('categories.index');
	Route::get('categories/create', 'CategoryController@create')->name('categories.create'); 
	Route::post('categories', 'CategoryController@store')->name('categories.store');
	Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
	Route::put('/categories/update/{id}', 'CategoryController@update')->name('categories.update');
	Route::delete('categories/{id}', 'CategoryController@destroy')->name('categories.destroy');
});

Route::group([ 'namespace' => 'User','as' => 'user.'], function () {
    Route::get('/', 'HomeController@getBook')->name('index'); 
});
