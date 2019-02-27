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

Route::get('/', 'Controller@index');

Route::get('/arquiteta', 'ArquitetaController@index');
Route::get('/arquiteta/criar', 'ArquitetaController@create');
Route::post('/arquiteta/criar', 'ArquitetaController@store');

Route::get('/cliente', 'ClienteController@index');
Route::get('/cliente/criar', 'ClienteController@create');
Route::post('/cliente/criar', 'ClienteController@store');

Route::get('/projeto', 'ProjetoController@index');
Route::get('/projeto/criar', 'ProjetoController@create');

Route::post('/projeto/criar', 'ProjetoController@store');
Route::post('/ajaxProject', 'ProjetoController@ajaxProject');

Route::get('/home', 'HomeController@index')->name('home');

