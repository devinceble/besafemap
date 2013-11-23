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
Route::get('/', array('before'=>'auth','uses' =>'HomeController@showWelcome'));//just remove auth


// Route::get('/', function()
// {
// 	return View::make('hello');
// });


Route::resource('tweets', 'TweetsController');

Route::resource('donations', 'DonationsController');

Route::resource('locations', 'LocationsController');

Route::resource('messages', 'MessagesController');

Route::resource('people', 'PeopleController');

Route::resource('places', 'PlacesController');

Route::resource('tokens', 'TokensController');

Route::resource('users', 'UsersController');