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

Route::get('/sw','LaraController@index');

Route::get('/home','HomeController@index');
Route::get('/sw/{name}','HomeController@get_data');

Route::prefix('contact')->group(function (){

Route::get('/', 'ContactController@index');
Route::get('/create', 'ContactController@create');
Route::post('/store', 'ContactController@store');

Route::get('/edit/{id}', 'ContactController@edit');
Route::post('/update/{id}', 'ContactController@update');
Route::get('/delete/{id}', 'ContactController@delete');
Route::get('/home', 'HomeController@index')->name('home');
});

Route::resource('product','ProductController');