<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard/all', [
        'uses' => 'CartelsController@showDashboard',
        'as' => 'cartel-dashboard'
    ]);

    Route::get('/dashboard/{cartel_id}', [
        'uses' => 'CartelsController@showCartel',
        'as' => 'cartel-details'
    ]);

});