<?php

Route::group(['middleware' => ['web']], function () {	

	Route::get('/', function() {
		return view('index');
	});

	Route::resource('/eventos', 'EventoController');

});


// Route::group(['middleware' => ['web']], function() {

// 	Route::get('/', function () {
//     	return view('index');
// 	});
// 	Route::resource('/eventos', 'EventoController@Index');
// });