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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*Route::get('/', ['as' => 'home', function(){
	return view('home');
}]);
*/

Route::get('/', ['as' => 'home', 'uses' =>'PagesController@home']);
 /*
Route::get('contactame', ['as' => 'contactos', function(){
	return view('contactos');
}]);
*/
Route::get('contactame', ['as' => 'contactos', 'uses'=> 'PagesController@contact']);

Route::post('contacto', 'PagesController@mensajes');
/*
route::get('Contactame', function(){
	return view('contactos');
});
*/
Route::get('salutos/{nombre?}', ['as' => 'salutos', 'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z]+");

//Messages
Route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);

