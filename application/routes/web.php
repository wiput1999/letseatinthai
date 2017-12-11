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

Route::get('/', 'homeController@getHome')->name('home');

Route::get('/session', 'homeController@getTestSession');

Route::get('/about', 'homeController@getAbout')->name('about');

Route::get('/restaurants', 'homeController@getRestaurants')->name('browse');

Route::group(['prefix' => 'api'], function () {
    Route::get('/restaurant/{id}', 'PhotoController@getRestaurantPhoto');

    Route::get('/food/{id}');

});

Route::group(['prefix' => 'portal'], function() {
    Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);

    Route::post('/login', ['as' => 'portal.doLogin', 'uses' => 'Auth\LoginController@login']);

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@doLogout']);

        Route::group(['middleware' => 'user'], function () {
            Route::get('/dashboard', ['as' => 'portal.dashboard', 'uses' => 'dashboardController@getDashboard']);

            Route::get('/menu/new', ['as' => 'portal.menu.new', 'uses' => 'MenuController@getNewMenu']);

            Route::post('/menu/new', ['as' => 'portal.menu.new.store', 'uses' => 'MenuController@doNewMenu']);
        });

        Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
            Route::get('/overview', ['as' => 'admin.dashboard', 'uses' => 'adminController@getDashboard']);

            Route::get('/overview/{id}', ['as', 'admin.restaurant.info']);

            Route::get('/categories', ['as' => 'admin.categories', 'uses' => 'adminController@getCategoriesList']);

            Route::get('/categories/new', ['as' => 'admin.categories.new', 'uses' => 'adminController@getNewCategories']);

            Route::post('/categories/new', ['as' => 'admin.categories.new.store', 'uses' => 'adminController@doStoreCategories']);

            Route::get('/restaurant/new', ['as' => 'admin.restaurant.new', 'uses' => 'adminController@getNewRestaurant']);

            Route::post('/restaurant/new', ['as' => 'admin.restaurant.new.store', 'uses' => 'adminController@doStoreNewRestaurant']);

            Route::get('/collection', ['as' => 'admin.collection', 'uses' => 'adminController@getCollectionsList']);

            Route::get('/collection/new', ['as' => 'admin.collection.new', 'uses' => 'adminController@getNewCollections']);

            Route::post('/collection/new', ['as' => 'admin.collection.new.store', 'uses' => 'adminController@doStoreCollections']);

        });

    });

});
