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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/establecimientos', 'EstablecimientoController@index');
Route::get('/establecimiento/{id}', 'EstablecimientoController@show');
Route::post('/establecimientos', 'EstablecimientoController@store');
Route::put('/establecimiento/{id}', 'EstablecimientoController@update');
Route::delete('/establecimiento/{id}', 'EstablecimientoController@destroy');

Route::get('/eventos', 'EventoController@index');
Route::post('/eventos', 'EventoController@store');
Route::get('/evento/{id}', 'EventoController@show');
Route::put('/evento/{id}', 'EventoController@update');
Route::delete('/evento/{id}', 'EventoController@destroy');