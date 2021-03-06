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

Route::get('/', 'PagesController@index');

Route::get('error', 'PagesController@error');

Route::get('about', [
	'middleware' => 'acl', 
	'permission' => '',
	'uses' => 'PagesController@about',
]);

Route::group(['middleware' => 'acl', 'permission' => ''], function()
{
    Route::resource('users', 'UsersController');

});


Route::resource('roles', 'RolesController');

Route::resource('permissions', 'PermissionsController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
