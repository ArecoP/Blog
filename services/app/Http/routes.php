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

//TIPOS DE RUTAS
//GET, POST, PUT, DELETE,  tambien RESOURCE

Route::get('/', function () {
    return view('welcome');// solo se coloca el nombre del archivo sin la extension .blade.php
    // en el caso de que el archivo exista dentro de una carpeta seria
    //return view('test.welcome'); o return view('test/welcome');
});

//ejemlo de rutas, probando como funciona rutas

//con 'as' para colocar nombres a las rutas
//con 'uses' para indicar con que controlador trabajar y con '@' el metodo que va a utilizar

/*Route::get('articles/{nombre?}',[

	'as' => 'articles'

]);
*/ 
Route::group(['prefix' => 'articles'], function(){

	Route::get('view/{id}',[

			'uses' => 'TestController@view',
			'as'   => 'articlesView'

		]);	

});
//grupo de rutas para el panel de administracion
Route::group(['prefix' => 'admin'], function(){
	Route::resource('users','UsersController');



	});