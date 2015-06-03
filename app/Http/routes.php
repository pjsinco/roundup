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

Route::post('/menu', 'MenuController@processMenuSelection');

Route::get('/email', 'EmailController@index');
Route::post('/email', 'EmailController@store');
Route::get('/email/create', 'EmailController@create');
Route::get('/email/{id}', 'EmailController@show');
Route::get('/email/{id}/edit', 'EmailController@edit');
Route::patch('/email/{id}', 'EmailController@update');
Route::get('/email/{id}/quote/create', 'QuoteController@create');
Route::get('/email/{id}/article/create', 'ArticleController@create');

Route::get('/article/{article_id}/edit', 'ArticleController@edit');
Route::patch('/article/{id}', 'ArticleController@update');
Route::post('/article', 'ArticleController@store');
Route::delete('/article/{id}', 'ArticleController@destroy');

Route::post('/quote', 'QuoteController@store');

//Route::get('/article', 'ArticleController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




Route::get('/test', 'EmailController@test');
