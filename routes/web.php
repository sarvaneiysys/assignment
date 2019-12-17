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

Route::get('/', 'RegisterUsersController@index');
Route::get('/registeruser', 'RegisterUsersController@create');

Route::post('/registeruser', 'RegisterUsersController@store');
Route::get('/listregisterusers', 'RegisterUsersController@index');
Route::get('/edit/{id}', 'RegisterUsersController@edit');
Route::post('/editregisteruser', 'RegisterUsersController@update');
Route::get('/delete/{id}', 'RegisterUsersController@destroy');


