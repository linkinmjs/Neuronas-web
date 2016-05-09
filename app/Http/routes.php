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
    return view('index');
});

/*Route::group(['middleware' => ['web']], function () {		

	Route::get('/ingreso', 'AuthController@getIngreso');
	Route::post('/ingreso', 'AuthController@postIngreso');
	Route::get('/registro', 'AuthController@getRegistro');
	Route::post('/registro', 'AuthController@postRegistro');
	Route::get('/desloguear', 'AuthController@getDesloguear');

	Route::resource('/eventos', 'EventoController');

});*/
