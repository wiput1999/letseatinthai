<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'homeController@getHome');

Route::get('/home/{filename}', 'homeController@getTestFile');

Route::get('/session', 'homeController@getTestSession');

Route::get('/about', 'homeController@getAbout');

Route::get('/restaurants', 'homeController@getRestaurants');

Route::group(['prefix' => 'api'], function () {
    Route::get('/restaurant/{filename}');

    Route::get('/food/{filename}');

});

Route::group(['prefix' => 'portal'], function() {
    Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);

    Route::post('/login', ['as' => 'portal.doLogin', 'uses' => 'Auth\LoginController@login']);

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@doLogout']);

        Route::get('/dashboard', ['as' => 'portal.dashboard', 'uses' => 'dashboardController@getDashboard']);

        Route::group(['prefix' => 'admin'], function () {
           Route::get('/overview');
        });

    });

});
