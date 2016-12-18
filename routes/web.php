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

    Route::get('/cartels', [
        'uses' => 'CartelsController@showCartels',
        'as' => 'cartel-dashboard'
    ]);

    Route::get('/cartels/{cartel_id}', [
        'uses' => 'CartelsController@showCartel',
        'as' => 'cartel-details'
    ]);

    Route::get('/cartels/{cartel_id}/factory', [
        'uses' => 'CartelsController@showFactory',
        'as' => 'cartel-factory'
    ]);


    Route::post('/cartels/{cartel_id}/factory/build-resource-building/{building_id}', [
        'uses' => 'CartelsController@buildResourceBuilding',
        'as' => 'cartel-build-resource-building'
    ]);


    Route::post('/cartels/{cartel_id}/factory/build-army-building/{building_id}', [
        'uses' => 'CartelsController@buildArmyBuilding',
        'as' => 'cartel-build-army-building'
    ]);



});