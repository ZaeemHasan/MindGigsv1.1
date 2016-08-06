<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    if (Auth::check()) {
			return Redirect::to('home');
		} else {
			return view('welcome');
		}
});

Route::post('/editprofile', 'ProfilesController@create');

Route::get('/home', function () {
		if (Auth::check()) {
			return view('home');
		} else {
			return Redirect::to('login');
		}
	});

Route::get('/profile', function () {
		if (Auth::check()) {
			return view('profile');
		} else {
			return Redirect::to('login');
		}
	});

Route::get('/editprofile', function () {
		if (Auth::check()) {
			return view('editprofile');
		} else {
			return Redirect::to('login');
		}
	});

Route::auth();

Route::get('/home', 'HomeController@index');
