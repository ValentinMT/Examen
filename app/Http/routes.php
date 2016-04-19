<?php

Route::get('/', function () {
    return view('website.index');
});

get('/registrousuario', function() {
	return view('website.registrousuario');
});

get('/iniciosesion', function() {
	return view('website.iniciosesion');
});

post('/registrousuarioModel', 'registrousuarioController@store');

post('/login', 'LoginController@store');

get('/administrador/panel', 'AdministradorController@index');

Route::group(['middleware' => 'admin'], function() { 
    get('/administrador', 'AdministradorController@index');
    get('/logout', 'AdministradorController@logout');
    get('/administrador/mascotas', 'registromascotaController@index');
    post('/registromascotaModel', 'registromascotaController@store');
    /*get('/registromascota', function() {
		return view('administrador.mascotas.registromascota');
	});*/
	get('/mascotasRegistradas/{id}', 'registromascotaController@show');
});
