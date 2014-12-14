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

Route::group(array('prefix' => 'api'), function(){

	Route::controller('sites', 'Api\SitesController');
});

Route::get('login', 'AccountsController@getLogin');
Route::post('login', 'AccountsController@postLogin');

Route::controller('password', 'RemindersController');

Route::get('logout', 'AccountsController@getLogout');

Route::get('signup', 'AccountsController@getSignup');
Route::post('signup', array('before' => 'csrf'), 'AccountsController@postSignup');

Route::controller('pages', 'StaticPagesController');

Route::get('app', 'AppController@getIndex');

Route::get('/', 'HomeController@getIndex');
