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

Route::group(array('prefix' => 'api'), function(){

	Route::controller('sites', 'Api\SitesController');
});

Route::get('login', 'AccountsController@getLogin');
Route::post('login', array('before' => 'csrf'), 'AccountsController@postLogin');

Route::get('logout', 'AccountsController@getLogout');

Route::get('signup', 'AccountsController@getSignup');
Route::post('signup', array('before' => 'csrf'), 'AccountsController@postSignup');

Route::controller('pages', 'StaticPagesController');

Route::get('/', 'HomeController@showWelcome');
