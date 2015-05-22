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

Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::get('/roundup/create', 'RoundupController@create');
Route::post('/roundup', 'RoundupController@store');
Route::get('/roundup/{id}', 'RoundupController@show');

Route::get('/test', 'RoundupController@test');
Route::get('/item', 'ItemController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
