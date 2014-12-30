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
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('test', function()
{
	return View::make('test');
});

// Route for creating users
Route::get('users/create', array('as' => 'users/create', 'uses' => 'UserController@create'));
Route::post('users/store', array('as' => 'users/store', 'uses' => 'UserController@store'));

// route to show the login form and login
Route::get('login', array('uses' => 'UserController@showLogin'));
Route::post('login', array('uses' => 'UserController@doLogin'));
Route::get('logout', array('uses' => 'UserController@logout'));

Route::controller('password', 'RemindersController');
