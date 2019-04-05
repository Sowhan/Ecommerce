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


Route::get('/contact', 'HomeController@get_form');
Route::post('/contact', 'HomeController@post_data');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
