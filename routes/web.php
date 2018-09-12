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

Route::get('login','LoginController@create')->name('login.index');
Route::post('login','LoginController@store')->name('login.store');
Route::get('logout','LogoutController@logout')->name('logout');

Route::group(['middleware' => 'admin'], function () {
	Route::group([ 'prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
		Route::get('/', 'HomeController@index')->name('dashboard');

	//CRUD Category
	Route::get('categories', 'CategoryController@index')->name('categories.index');
	Route::get('categories/create', 'CategoryController@create')->name('categories.create'); 
	Route::post('categories', 'CategoryController@store')->name('categories.store');

	Route::get('books', 'BookController@index')->name('books.index');
	Route::get('books/create', 'BookController@create')->name('books.create'); 
	Route::post('books', 'BookController@store')->name('books.store');
	});
});
