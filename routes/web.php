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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group([ 'namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/index', 'HomeController@index')->name('/index');  
    Route::get('/book','BookController@show_all_book')->name('all_book');
    Route::get('/author','AuthorController@show_all_author')->name('all_author');
	Route::get('/contact','ContactController@show_form')->name('contact');
});

Route::group(['namespace' => 'Auth'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'LoginController@index')->name('login');
        Route::get('registered' , 'RegisterController@index')->name('registered');
    });
});

