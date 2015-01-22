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

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

Route::group(['prefix' => 'api'], function(){
	Route::controller('accounts', 'Api\AccountsController');
	Route::controller('users', 'Api\UsersController');

    Route::controller('pages', 'Api\PagesController');
    Route::controller('posts', 'Api\PostsController');
});

Route::get('login', 'AccountsController@getLogin');
Route::post('login', 'AccountsController@postLogin');

Route::controller('password', 'RemindersController');

Route::get('logout', 'AccountsController@getLogout');

Route::get('signup', 'AccountsController@getSignup');
Route::post('signup', ['before' => 'csrf'], 'AccountsController@postSignup');

Route::controller('pages', 'StaticPagesController');

Route::get('app/social-accounts/twitter-login', 'SocialAccountController@getTwitterLogin');
Route::get('app/social-accounts/twitter-login-callback', 'SocialAccountController@getTwitterLoginCallback');

Route::get('/', 'HomeController@getIndex');

Route::get('{app?}', function() {
    return File::get(public_path().'/app.html');
})->where('app', '.*');

/*
App::missing(function($exception)
{
    return View::make('app');
});
*/
