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

Route::get('/', 'MessageController@index');
Route::get('/junk', 'MessageController@junk');

Route::get('/read/{id}', 'MessageController@read');

Route::get('/send', 'MessageController@send');
Route::post('/sendto', 'MessageController@sendto');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

