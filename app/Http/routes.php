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
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//Rutas de HomeController
Route::get('search', 'HomeController@search');
Route::get('/', 'HomeController@index');
Route::get('ofertas', 'HomeController@ofertas');
Route::get('quien-somos', 'HomeController@quienSomos');
Route::get('aviso_legal', 'HomeController@avisoLegal');
Route::get('condiciones_generales', 'HomeController@condicionesGenerales');
Route::get('politica_cookies', 'HomeController@politicaCookies');
//Ruta de SoapController
Route::get('tiendas','SoapController@geolocation');
//Ruta de CategoriaController
Route::resource('categoria','CategoriasController');
//Ruta de ProductoController
Route::resource('producto','ProductoController');
//Rutas de UsuarioController
Route::resource('usuario','UsuarioController');
Route::get('verificacion/{confirm_token}', 'UsuarioController@confirmRegister');


