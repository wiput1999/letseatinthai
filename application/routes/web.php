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

Route::get('/about-us', 'homeController@getAbout');

Route::get('/login', 'homeController@getLogin');

Route::get('/dashboard', 'homeController@getDashboard');

Route::get('/restaurants', 'homeController@getRestaurants');