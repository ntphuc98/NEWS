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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login' , 'SessionController@new');

Route::post('admin/login' , 'SessionController@create');


Route::prefix('admin')->name('admin.')->group(function(){

	Route::get('categories', 'CategoriesController@index')->name('categories.index');
	Route::prefix('category')->name('categories.')->group(function(){
		Route::get('new', 'CategoriesController@new')->name('new');
		Route::get('/{id}', 'CategoriesController@show')->name('show');
		Route::post('', 'CategoriesController@create')->name('create');
		Route::put('/{id}', 'CategoriesController@update')->name('update');
		Route::delete('/{id}', 'CategoriesController@delete')->name('delete');
	});

	Route::get('users', 'UsersController@index')->name('users.index');
	Route::prefix('user')->name('users.')->group(function(){
		Route::get('{id}', 'UsersController@show')->name('show');
		Route::get('new', 'UsersController@new')->name('new');
	});

	Route::prefix('news')->name('news.')->group(function(){
		Route::get('', 'NewsController@index')->name('index');
		Route::get('{id}', 'NewsController@show')->name('show');
		Route::get('new', 'NewsController@new')->name('new');
	});
});
