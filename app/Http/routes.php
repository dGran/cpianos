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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('servicios', ['as' => 'services', 'uses' => 'ServiceController@index']);
Route::get('productos', ['as' => 'articles', 'uses' => 'ArticleController@index']);
Route::get('lutheria', ['as' => 'lutherie', 'uses' => 'LutherieController@index']);
