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

/**
 * Auth Routes
 */
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

/**
 * Page Routes
 */
Route::resource('', 'PagesController');
Route::get('calendar', array('as' => 'calendar', 'uses' => 'PagesController@calendar'));
Route::get('everyone', array('as' => 'everyone', 'uses' => 'PagesController@everyone'));
Route::post('everyone', array('as' => 'everyone', 'uses' => 'UsersController@store'));

/**
 * Article Routes
 */
Route::resource('articles', 'ArticlesController');

/**
 * Project Routes
 */
Route::resource('projects', 'ProjectsController');
Route::get('projects/{project-slug}/edit', array('as' => 'editProject', 'uses' => 'ProjectsController@edit'));
Route::get('projects/{project-slug}', array('as' => 'viewProject', 'uses' => 'ProjectsController@show'));

/**
 * Account Routes
 */
Route::get('account/edit', array('as' => 'editAccount', 'uses' => 'AccountController@edit'));
Route::post('account/edit', array('as' => 'editAccount', 'uses' => 'AccountController@update'));

/**
 * User Routes
 */
Route::resource('users', 'UsersController');
Route::post('users/create', array('as' => 'storeUser', 'uses' => 'AccountController@store'));
