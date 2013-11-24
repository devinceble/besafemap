<?php

class LoginController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'LoginController@showLogin');
      |
     */

    public function showLogin() {
        return View::make('login');
    }

    public function loginWithFacebook() {

        // get data from input
        $code = Input::get('code');

        // get fb service
        $fb = OAuth::consumer('Facebook');

        // check if code is valid
        // if code is provided get user data and sign in
        if (!empty($code)) {

            // This was a callback request from google, get the token
            $token = $fb->requestAccessToken($code);

            // Send a request with it
            $result = json_decode($fb->request('/me'), true);
            //dd($result);
            //find this id on facebook_table - DONE
            //if yes, proceed to welcome page - DONE
            //if no, then registred this on database facebook_table - DONE
            //and then redirect to welcome page
            //Find
              $user_find = Facebook::where('facebook_id',$result['id'])->count();
//            echo $user_find;
            //  echo $result['id'];
              //echo '<br/>';
             // echo $user_find; die();
              if($user_find)
              {
//                  $user = Facebook::where('facebook_id',$result['id']);
//                  Auth::login($user);
                   //echo 'yeah!';die();

                    if (Auth::attempt(array('username' => 'ran', 'password' => '123')))//static here first.
                    {
                                // echo 'success';die();
                            return Redirect::to('/');
                    }

                    //return Redirect::to('/');
              }
              else
              {
//              Create
                $user = new Facebook;
                if(isset($result['id']))
                {
                    $user->facebook_id = $result['id'];
                }
                if(isset($result['first_name']))
                {
                    $user->first_name = $result['first_name'];
                }
                if(isset($result['last_name']))
                {
                    $user->last_name = $result['last_name'];
                }
                if(isset($result['middle_name']))
                {
                    $user->middle_name = $result['middle_name'];
                }
                if(isset($result['gender']))
                {
                    $user->gender = $result['gender'];
                }
                if(isset($result['email']))
                {
                     $user->email = $result['email'];
                }
                $user->save();
                echo 'Created'.'</br>';
              }
              
            $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            echo $message . "<br/>";

            //Var_dump
            //display whole array().
            dd($result);
        }
        // if not ask for permission first
        else {
            // get fb authorization
            $url = $fb->getAuthorizationUri();
//            return Redirect::route('login');
            // return to facebook login url
//            echo "ehem";die();
            return Response::make()->header('Location', (string) $url);
        }
    }

    public function loginWithGoogle() {

        // get data from input
        $code = Input::get('code');

        // get google service
        $googleService = OAuth::consumer('Google');

        // check if code is valid
        // if code is provided get user data and sign in
        if (!empty($code)) {

            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken($code);

            // Send a request with it
            $result = json_decode($googleService->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);
            
          
            
                
            $message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            echo $message . "<br/>";

            //Var_dump
            //display whole array().
            dd($result);
        }
        // if not ask for permission first
        else {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();

            // return to facebook login url
            return Response::make()->header('Location', (string) $url);
        }
    }

}