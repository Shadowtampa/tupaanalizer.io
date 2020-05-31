<?php

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

Route::resource('/areas','AreasController');

Route::resource('/areas/busca','AreasController');

Route::resource('/indicadores','IndicadoresController');

Route::post('/areas/busca','AreasController@busca');

Route::post('/produtos/busca','ProdutosController@busca');

Auth::routes();