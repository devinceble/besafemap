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


//good
Route::get('login', array('uses' => 'LoginController@showLogin'));

//good
Route::get('/', array('before'=>'auth','uses' =>'HomeController@showWelcome'));


// Route::get('/', function()
// {
// 	return View::make('hello');
// });