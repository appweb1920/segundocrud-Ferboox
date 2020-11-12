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

Route::get('/', function () {
    return view('welcome');
});

//Pieza
Route::get('/piezas','PiezasController@index'); //Muestra todas las piezas.
Route::post('/registroPieza','PiezasController@store');
Route::get('/editarPieza/{id}','PiezasController@show');
Route::post('/editarPieza/guardaPieza','PiezasController@guardaCampos');
Route::get('/borrarPieza/{id}','PiezasController@destroy');



