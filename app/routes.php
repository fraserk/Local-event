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

Route::get('/', function()
{
	return View::make('hello');
});

route::get('evnts/upload/{id}',array('as'=>'upload','uses'=> 'EvntsController@GetUpload'));
route::post('/upload',array('as'=>'postupload','uses'=> 'EvntsController@PostUpload'));
route::get('/dashboard',array('as'=>'dashboard', 'uses'=>'UsersController@dashboard'))->before('auth');
Route::get('user/login',array('as'=>'login','uses'=>'UsersController@login'));
Route::post('user/loginck',array('as'=>'loginck','uses'=>'UsersController@loginck'));
Route::resource('evnts', 'EvntsController');
Route::resource( 'user', 'UsersController');

Route::resource('venues', 'VenuesController');// Adding auth checks for the upload functionality is highly recommended.

// Cabinet routes
Route::get('upload/data', 'UploadController@data');
Route::resource( 'upload', 'UploadController',
        array('except' => array('show', 'edit', 'update', 'destroy')));
