<?php

Route::group(['middleware' => ['web']], function () {	

	Route::get('/', function() {
		return view('index');
	});
	Route::get('/index', function() {
		return view('index');
	});
		Route::get('/contactos', function() {
		return view('contactos');
	});

	Route::resource('/eventos', 'EventoController');

});


// Route::group(['middleware' => ['web']], function() {

// 	Route::get('/', function () {
//     	return view('index');
// 	});
// 	Route::resource('/eventos', 'EventoController@Index');
// });