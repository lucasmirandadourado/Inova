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

Route::get('/', 'ClienteController@index');

Route::get('contato', function(){
	return 'Contato do cliente.';
});

Route::get('/arquiteta', 'ArquitetaController@index');

Route::get('/cliente', 'ClienteController@index');
Route::get('/cliente/criar', 'ClienteController@create');
Route::resource('/cliente', 'ClienteController@store');