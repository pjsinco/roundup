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

Route::get('/', 'EmailController@create');

//Route::get('home', 'HomeController@index');

Route::post('/email', 'EmailController@store');
Route::get('/email/create', 'EmailController@create');
Route::get('/email/{id}', 'EmailController@show');
Route::get('/email/{id}/edit', 'EmailController@edit');

Route::post('/menu', 'MenuController@processMenuSelection');

Route::get('/email/{id}/quote/create', 'QuoteController@create');
Route::get('/email/{id}/article/create', 'ArticleController@create');

Route::post('/quote', 'QuoteController@store');
Route::post('/article', 'ArticleController@store');


//Route::get('/article', 'ArticleController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




Route::get('/test', 'EmailController@test');
