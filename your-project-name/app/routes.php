<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|


Route::get('/', function()
{
	return View::make('hello');
});

*/

Route::get('/', ['as' =>'home', 'uses' =>'HomeController@index']);

//Ruta a categoría
Route::get('candidates/{slug}/{id}', ['as' =>'category', 'uses' =>'CandidatesController@category']);

//Ruta a candidato
Route::get('{slug}/{id}', ['as' =>'candidate', 'uses' =>'CandidatesController@show']);

/*
Route::get('welcome', function() {
   return 'Bienvenidos a Laravel';
});

Route::get('consultaclick', function() {
	return Redirect::to('http://www.consultaclick.es');
});

Route::get('hola', function() {
	View::make(‘welcome’)->with(‘name’, ‘Duilio’);
}); */
