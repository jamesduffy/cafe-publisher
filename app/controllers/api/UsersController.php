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
			$user->save();

			$response = array(
				'avatar' => Gravatar::src($user->email),
				'email' => $user->email,
				'email_confirmed' => $user->email_confirmed,
			);

			return Response::json($response, 200);
		} else {
			return Response::json('Not authorized', 401);
		}
	}

	public function postCreate() {

	}

	public function postEdit() {

	}

}
