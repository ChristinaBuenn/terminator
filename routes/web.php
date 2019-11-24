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

Route::get('/', function () {

    $name = request('name');
    return view('welcome', [
        'name' => $name
    ]);
});

Route::get('/vistas', 'VistasController@index');
Route::get('/vistas/create', 'VistasController@create');
Route::get('/vistas/{vista}', 'VistasController@show');
Route::post('/vistas', 'VistasController@store');
Route::get('/vistas/{vista}/edit', 'VistasController@edit');
Route::put('/vistas/{vista}', 'VistasController@update');
Route::delete('/vistas/{vista}', 'VistasController@delete');
