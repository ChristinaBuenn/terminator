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

Route::get('/vistas', 'VistasController@index')->middleware('auth');
Route::get('/vistas/create', 'VistasController@create')->middleware('auth');
Route::get('/vistas/{vista}', 'VistasController@show');
Route::post('/vistas', 'VistasController@store')->middleware('auth');
Route::get('/vistas/{vista}/edit', 'VistasController@edit')->middleware('auth');
Route::put('/vistas/{vista}', 'VistasController@update')->middleware('auth');
Route::delete('/vistas/{vista}', 'VistasController@destroy')->middleware('auth');

Auth::routes();

Route::get('vistas/{vista}/rsvp_yes', 'VistasController@rsvpYes');
Route::get('vistas/{vista}/rsvp_no', 'VistasController@rsvpNo');
