<?php

// use Illuminate\Routing\Route;
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

Route::get('/', 'Controller@index');


Route::get('/arquiteta', 'ArquitetaController@index');
Route::get('/arquiteta/ajaxArquiteta', 'ArquitetaController@ajaxArquiteta');
Route::get('/arquiteta/criar', 'ArquitetaController@create');
Route::post('/arquiteta/criar', 'ArquitetaController@store');

Route::get('/cliente', 'ClienteController@index');
Route::get('/cliente/ajaxCliente', 'ClienteController@ajaxCliente');
Route::get('/cliente/criar', 'ClienteController@create');


Route::get('/projeto', 'ProjetoController@index');
Route::get('/projeto/ajaxProjeto', 'ProjetoController@ajaxProjeto');
Route::get('/projeto/criar', 'ProjetoController@create');

Route::get('/projeto/criar', 'ProjetoController@store');
Route::get('projeto/ajaxProject', 'ProjetoController@ajaxProject');
