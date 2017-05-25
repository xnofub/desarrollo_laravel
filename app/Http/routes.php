<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('byformat', 'MazosController@index');
Route::resource('listadomazos', 'MazosController@backendIndex');
Route::resource('mazos', 'MazosController');
Route::resource('jugadores', 'JugadoresController');
Route::resource('formatos', 'FormatosController');
Route::resource('eventos', 'EventosController');

/*
Route::get('participantes/{id}', [
    'as'=>'participantes',
    'uses'=>'EventosMazosController@participaEvento'
]);
 */
Route::get('participantes/scoreparticipantes/{id}', 'EventosMazosController@createbyget');
Route::get('participantes/editscoreparticipantes/{id}', 'EventosMazosController@editbyget');
Route::resource('participantes', 'EventosMazosController');




