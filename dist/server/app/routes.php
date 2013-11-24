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
Route::get('login',function(){
    if(Auth::check()){
    	//if user type=='judge'
        return Redirect::to('/');
    }

    return View::make('login');
    //return Redirect::action('LoginController@showLogin');
    //return View::make('login.index')->with('title','Login');
});


Route::post('login',function(){

    $userdata = array(
        'username' => Input::get('username'),
        'password' => Input::get('password'), 
    );  
    
    // if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')), true))
    // {
    //             // echo 'success';die();
    //     	return Redirect::to('/');
    // }

    if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
    {
                // echo 'success';die();
            return Redirect::to('/');
    }

    // echo '<br/>failed';die();
    return Redirect::to('login')
    			->with('error','Oops! Your login info was incorrect.Please try again.')							->withInput(Input::except('password'));
});

Route::get('signup',function()
{
    return View::make('signup');
});

Route::post('signup',function()
{//$inputs = Input::all();

     //all good, baby

     $rules = array('username'=>'Unique:users|Required',
                    'password'=>'Required|Confirmed',
                    'password_confirmation'=>'Required');


    $validator = Validator::make(Input::all() , $rules);

    if ($validator->fails())
    {
       //dd($validator);
       //echo $validator;die();
        return Redirect::to('signup')->withErrors($validator);
    }

    $users = new User;
    $users->username = Input::get('username');
    $users->password = Hash::make(Input::get('password'));
    $users->type = 'mun_admin';
    $users->save();
    //rules here
    //password must be confirmed
    //if password is not it will return to sign up
    //
    return Redirect::to('login');
    //return View::make('signup');
});

//good
//Route::get('login', array('before'=>'auth','as'=>'login','uses' => 'LoginController@showLogin'));
//fb
Route::get('login/fb',array('uses'=> 'LoginController@loginWithFacebook'));
//gg
Route::get('login/gg',array('uses'=> 'LoginController@loginWithGoogle'));
//good
Route::get('/', array('before'=>'auth','uses' =>'HomeController@showWelcome'));//just remove auth


// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::post('persons',array('as'=>'persons_post', 'uses'=>'PersonsController@postPersons'));

Route::controller('persons', 'PersonsController');

Route::resource('tweets', 'TweetsController');

Route::resource('donations', 'DonationsController');

Route::resource('locations', 'LocationsController');

Route::resource('messages', 'MessagesController');

Route::resource('people', 'PeopleController');

Route::resource('places', 'PlacesController');

Route::resource('tokens', 'TokensController');

Route::resource('users', 'UsersController');

Route::get('passwordninjutsu',function(){
             $user = User::find(2);
             $temp = $user->password;
             $user->password = Hash::make($temp);
             $user->save();
             echo 'success!';die();
});

Route::get('logout',function(){
    Auth::logout();
    return Redirect::to('login')
                                ->with('success','You have been signed out.');                             
});