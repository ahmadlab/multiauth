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
    return view('welcome');
});

Route::group(['prefix' => 'user'], function(){
	Route::get('create', 'DevelController@create');
	Route::get('login', 'DevelController@login');
	Route::get('check', 'DevelController@check');
	Route::get('logout', 'DevelController@logout');
});

Route::group(['prefix' => 'admin'], function(){
	Route::get('create', 'DevelController@create_admin');
	Route::get('login', 'DevelController@login_admin');
	Route::get('check', 'DevelController@check_admin');
	Route::get('logout', 'DevelController@logout_admin');
});




