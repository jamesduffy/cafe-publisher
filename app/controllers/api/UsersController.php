<?php namespace Api;

use BaseController;

use Auth;
use Gravatar;
use Response;
use Input;

use User;

class UsersController extends BaseController {

	public function getMe()
	{
		if (Auth::check())
		{
			$response = array(
				'avatar' => Gravatar::src(Auth::user()->email),
				'email' => Auth::user()->email,
				'email_confirmed' => Auth::user()->email_confirmed,
				'first_name' => Auth::user()->first_name,
				'last_name' => Auth::user()->last_name,
				'phone' => Auth::user()->phone,
			);

			return Response::json($response, 200);
		} else {
			return Response::json('Not authorized', 401);
		}

	}

	public function postMe()
	{
		if (Auth::check())
		{
			$user = User::find(Auth::id());
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->phone = Input::get('phone');
			$user->save();

			$response = array(
				'avatar' => Gravatar::src($user->email),
				'email' => $user->email,
				'email_confirmed' => $user->email_confirmed,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'phone' => $user->phone,
			);

			return Response::json($response, 200);
		} else {
			return Response::json('Not authorized', 401);
		}
	}

	public function postCreate() {

	}

}
