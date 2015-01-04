<?php

class UserController extends BaseController {

  function index(){

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return Response
  */
  public function create()
  {
    return View::make('users.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @return Response
  */
  public function store()
  {

    $rules = array(
      'firstname'    => 'required',
      'lastname'    => 'required',
      'email'    => 'required|email',
      'password' => 'required|min:5'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      // return errors
      return Redirect::back()
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form

    } else {
      // store the user
      $firstname = Input::get('firstname');
      $lastname = Input::get('lastname');
      $email = Input::get('email');
      $password = Input::get('password');

      $hashedPassword = Hash::make($password);

      $user = new User;
      $user->firstname = $firstname;
      $user->lastname = $lastname;
      $user->email = $email;
      $user->password = $hashedPassword;

      $user->save();

      // log the user in
      if (Auth::attempt(array("email" => $email, "password" => $password))) {
        return Redirect::to('/');
      }else{
        return Redirect::to('login');
      }

    }

  }


  public function showLogin()
  {
    // show the form
    return View::make('auth.login');
  }

  public function doLogin()
  {

    // validate the info, create rules for the inputs
    $rules = array(
      'email'    => 'required|email',
      'password' => 'required|min:5'
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
      return Redirect::back()
      ->withErrors($validator) // send back all errors to the login form
      ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    } else {
      // create our user data for the authentication
      $userdata = array(
        'email' 	=> Input::get('email'),
        'password' 	=> Input::get('password')
      );

      // attempt to do the login
      if (Auth::attempt($userdata)) {
        return Redirect::to('/');
      } else {
        return Redirect::back();
      }

    }

  }


  public function logout()
  {
    Auth::logout();
    return Redirect::back();
  }


}
