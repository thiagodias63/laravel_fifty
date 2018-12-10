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
Route::post('/login', 'UserController@login');

Route::post('/ordem', 'OrdemController@cadastrar');
Route::get('/ordem', 'OrdemController@listar');
Route::get('/ordem/completadas', 'OrdemController@completadas');
Route::get('/ordem/pendentes', 'OrdemController@pendetes');
Route::put('/ordem/{id}', 'OrdemController@finalizar');

// Route::get('/produtos', 'ResultadosController@getProdutos');
Route::get('/servicos', 'ResultadosController@getServicos');
Route::get('/clientes', 'ResultadosController@getClientes');
// Route::get('/mensal', 'ResultadosController@getMensal');
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/