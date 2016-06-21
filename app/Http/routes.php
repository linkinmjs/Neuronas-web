<?php

Route::group(['middleware' => ['web']], function () {	

	Route::get('/', function() {
		return redirect()->to('/index');
	});
	Route::get('/contactos', function() {
		return view('contactos');
	});

	Route::resource('/index', 'MainController');
	Route::resource('/eventos', 'EventoController');
});