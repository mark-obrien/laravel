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

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('client-listing', 'PagesController@clientListing');
Route::get('timeline', function(){
    return view('pages.timeline');
});

Route::resource('articles', 'ArticlesController');

Route::resource('projects', 'ProjectsController');

Route::get('foo', 'FooController@foo');