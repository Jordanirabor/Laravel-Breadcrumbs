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

Route::get('/',  ['as' => 'home', 'uses' => 'MainController@home']);

Route::get('/continent/{name}',  ['as' => 'continent', 'uses' => 'MainController@continent']);

Route::get('/country/{name}',  ['as' => 'country', 'uses' => 'MainController@country']);

Route::get('/city/{name}',  ['as' => 'city', 'uses' => 'MainController@city']);