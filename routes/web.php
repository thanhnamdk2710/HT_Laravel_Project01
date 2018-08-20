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
Route::group([ 'namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/index', 'HomeController@index')->name('index');  
    Route::get('/book','BookController@show')->name('all_book');
    Route::get('/detail','DetailController@show')->name('detail');
    Route::get('/category','CategoryController@show')->name('category');
    Route::get('/author','AuthorController@show')->name('all_author');
	Route::get('/contact','ContactController@show')->name('contact');
	Route::get('/registered' , 'RegisterController@index')->name('registered');
});
Route::get('login', 'LoginController@index')->name('login');
