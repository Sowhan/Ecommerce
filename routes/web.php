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
Route::get('/to',function (){
   return view('thank');
});
Route::get('/sw','TohidController@result');
Route::get('sw/{tohid}',"TohidController@index");

Route::get('contact','TohidController@get_form');
Route::post('contact','TohidController@post_data');