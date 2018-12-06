<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/produtos', 'ResultadosController@getProdutos');
Route::get('/servicos', 'ResultadosController@getServicos');
Route::get('/clientes', 'ResultadosController@getClientes');
Route::get('/mensal', 'ResultadosController@getMensal');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
