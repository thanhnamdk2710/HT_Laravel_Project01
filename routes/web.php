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
	    Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
	    Route::put('/categories/update/{id}', 'CategoryController@update')->name('categories.update');
	    Route::delete('categories/{id}', 'CategoryController@destroy')->name('categories.destroy');
		
	//CRUD Book
		Route::get('books', 'BookController@index')->name('books.index');
		Route::get('books/create', 'BookController@create')->name('books.create'); 
		Route::post('books', 'BookController@store')->name('books.store');
		Route::get('books/{id}/edit', 'BookController@edit')->name('books.edit');
		Route::put('books/update/{id}', 'BookController@update')->name('books.update');
		Route::delete('books/{id}', 'BookController@destroy')->name('books.destroy');

    // CRUD User
		Route::get('users', 'UserController@index')->name('users.index');
		Route::get('users/{id}', 'UserController@show')->name('users.show');
		Route::post('users/update/{aid}', 'UserController@getAjax');
		Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');
		Route::delete('users/{id}/review/{id_book}', 'UserController@deleteReview')->name('users.delete_review');
	});
});

Route::group([ 'namespace' => 'User','as' => 'user.'], function () { 
	Route::get('/', 'HomeController@getbook')->name('index');  
	Route::get('/book','BookController@show')->name('all_book');
	Route::get('/detail','DetailController@show')->name('detail');
	Route::get('/category','CategoryController@show')->name('category');
	Route::get('search', 'HomeController@search')->name('search'); 
	Route::get('/contact','ContactController@show')->name('contact');
	Route::get('/registered' , 'RegisterController@index')->name('registered');
});
