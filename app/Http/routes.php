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

Route::auth();

Route::get('/home', 'HomeController@index');


//profile routes 

Route::get('/profile/{id}/index','profileController@index');

Route::post('/profile/{id}','profileController@store');

Route::get('/profile/{id}/edit','profileController@edit');

Route::put('/profile/{id}/update','profileController@update');

//company routes 

Route::get('/company/{id}/index','companyController@index');

Route::post('/company/{id}','companyController@store');

Route::get('/company/{id}/edit','companyController@edit');

Route::put('/company/{id}/update','companyController@update');

//job routes

Route::get('/job/{id}/index','jobController@index');

Route::post('/job/{id}','jobController@store');

Route::get('/job/{id}/show','jobController@show');




