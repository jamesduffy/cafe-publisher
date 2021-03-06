<?php

class AccountsController extends BaseController {

	private $signup_validation_rules = array(
		'email' => 'required|email|unique:users',
		'password' => 'required|min:8|confirmed',
		'password_confirmation' => 'required',
		'agreement' => 'required'
	);

	public function getLogin()
	{
		if (Auth::check())
		{
			return Redirect::action('AppController@getIndex');
		}

        return View::make('accounts/login');
	}

	public function postLogin()
	{
		if (Auth::check())
		{
			//return Redirect::action('AppController@getIndex');
		}

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), true))
		{
			//return Redirect::intended('app');
		}

		return Redirect::action('AccountsController@getLogin');
	}

	public function getSignup()
	{
		return View::make('accounts/signup');
	}

	public function postSignup()
	{
		$validator = Validator::make(Input::all(), $this->signup_validation_rules);

		if($validator->fails())
		{
			return Redirect::to('signup')->withErrors($validator);
		}

		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		Auth::login($user);

		return Redirect::action('AppController@getIndex');
	}

	public function getLogout()
	{
		Auth::logout();

		return Redirect::action('HomeController@getIndex');
	}

}
