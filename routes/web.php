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

Route::get('/', 'WelcomeController@index');

Route::get('/adios', 'AdiosController@index');

Route::get('/bye', 'ByeController@index');

Route::get('/auRevoir', 'AuRevoirController@index');

Route::get('/ciao', 'CiaoController@index');