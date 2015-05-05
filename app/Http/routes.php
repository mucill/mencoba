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

/**
 * Routes for Public Acces
 */
Route::get('/', 'WelcomeController@index');

/**
 * Routes for Member Only
 */


/**
 * Routes for Manage Databases
 */
Route::get('home', 'Manage\HomeController@index');
Route::get('products', ['middleware' => 'auth', 'uses' => 'Manage\ProductsController@index']);
Route::get('category', ['middleware' => 'auth', 'uses' => 'Manage\CategoryController@index']);
Route::controllers([
	'auth' 		=> 'Auth\AuthController',
	'password' 	=> 'Auth\PasswordController'
]);