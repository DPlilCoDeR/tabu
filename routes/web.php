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
    return view('search');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('search');

Route::get('/result', function () {
	return view('searchResult');
});

Route::any('/searchIo', 'PostController@search');
Route::get('/results', 'PostController@show')->name('searchIo');


Route::get('/search','PostController@index');



