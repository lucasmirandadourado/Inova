<?php

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;
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
Auth::routes();

Route::get('/', 'Controller@index');
Route::get('/login', 'Controller@login');
Route::post('/login/verificarLogin', 'Controller@verificarLogin');

Route::get('/arquiteta', 'ArquitetaController@index');
Route::get('/arquiteta/ajaxArquiteta', 'ArquitetaController@ajaxArquiteta');
Route::get('/arquiteta/criar', 'ArquitetaController@create');


Route::get('/cliente', 'ClienteController@index');
Route::get('/cliente/ajaxCliente', 'ClienteController@ajaxCliente');
Route::get('/cliente/criar', 'ClienteController@create');
Route::post('/cliente/store', 'ClienteController@store');

Route::get('/projeto', 'ProjetoController@index');
Route::get('/projeto/ajaxProjeto', 'ProjetoController@ajaxProjeto');
Route::get('/projeto/criar', 'ProjetoController@create');

Route::get('projeto/ajaxProject', 'ProjetoController@ajaxProject');

