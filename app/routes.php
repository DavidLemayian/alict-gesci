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

Route::get('/', function(){
  return View::make('about');
});
Route::group(['before' => 'auth'], function(){
  Route::resource('declarations', 'DeclarationsController');
  Route::resource('statements', 'StatementsController');
  Route::resource('languages', 'LanguagesController');
  Route::resource('skills', 'SkillsController');
  Route::resource('supervisors', 'SupervisorsController');
  Route::resource('works', 'WorksController');
  Route::resource('educations', 'EducationsController');
  Route::resource('courses', 'CoursesController');
  Route::resource('profiles', 'ProfilesController');
});


// Confide routes
Route::get('user/create',                 'UserController@create');
Route::post('user',                       'UserController@store');
Route::get('login',                       'UserController@login');
Route::post('login',                      'UserController@do_login');
Route::get('user/confirm/{code}',         'UserController@confirm');
Route::get('user/forgot_password',        'UserController@forgot_password');
Route::post('user/forgot_password',       'UserController@do_forgot_password');
Route::get('user/reset_password/{token}', 'UserController@reset_password');
Route::post('user/reset_password',        'UserController@do_reset_password');
Route::get('user/logout',                 'UserController@logout');