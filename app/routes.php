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




Route::get('/', array('as'=>'home','uses'=>'EvntsController@index'));

route::get('evnts/upload/{id}',array('as'=>'upload','uses'=> 'EvntsController@GetUpload'));
route::post('/upload',array('as'=>'postupload','uses'=> 'EvntsController@PostUpload'));
route::get('/dashboard',array('as'=>'dashboard', 'uses'=>'UsersController@dashboard'))->before('auth');
Route::get('user/login',array('as'=>'login','uses'=>'UsersController@login'));
Route::get('user/logout',array('as'=>'logout','uses'=>'UsersController@destroy'));
Route::post('user/loginck',array('as'=>'loginck','uses'=>'UsersController@loginck'));
Route::get('evnts/remove/{slug}', array('as'=>'remove','uses'=>'EvntsController@remove'));
Route::resource('evnts', 'EvntsController');
Route::resource( 'user', 'UsersController');

Route::get('password_reset/reset/{token}','PasswordResetController@reset');
Route::post('password_reset/reset/{token}','PasswordResetController@Postreset');
Route::resource('venues', 'VenuesController',array('only'=>array('store')));
Route::resource('password_reset','PasswordResetController');
Route::get('/sitemap','EvntsController@sitemap');
Route::get('/contact',array('as'=>'contact','uses'=>'StaticController@contact'));
Route::post('/contact',array('uses'=>'StaticController@sendcontact'));

// Cabinet routes
Route::get('upload/data', 'UploadController@data');
Route::resource( 'upload', 'UploadController',
        array('except' => array('show', 'edit', 'update', 'destroy')));
