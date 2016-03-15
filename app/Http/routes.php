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

Route::get('/', 'JobsController@index');
Route::get('/home', 'JobsController@index');
Route::get('/jobs', 'JobsController@index');
Route::get('/jobs/create', 'JobsController@create');
Route::post('/jobs/store', 'JobsController@store');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::group(['prefix' => 'api'], function()
{
    Route::resource('authenticate', 'JWTAuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'JWTAuthenticateController@authenticate');
    Route::get('authenticate/user', 'JWTAuthenticateController@getAuthenticatedUser');
    Route::resource('jobs', 'APIJobsController');
});