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

Route::get('/order/{id}', 'CartController@getFoodList')->name('order');

//Cart
Route::get('/cart', 'CartController@getCart')->name('cart');

Route::get('/cart/add/{id}', ['as' => 'cart.add', 'uses' => 'CartController@addCartItem']);

Route::get('/cart/plus/{id}', ['as' => 'cart.plus', 'uses' => 'CartController@doCartPlus']);

Route::get('/cart/minus/{id}', ['as' => 'cart.minus', 'uses' => 'CartController@doCartMinus']);

Route::get('/cart/delete/{id}', ['as' => 'cart.delete', 'uses' => 'CartController@doCartDelete']);

Route::get('/summary', ['as' => 'summary', 'uses' => 'CartController@getSummary']);

Route::get('/empty', ['as' => 'empty', 'uses' => 'CartController@doEmpty']);

Route::group(['prefix' => 'api'], function () {
    Route::get('/restaurant/{id}', 'PhotoController@getRestaurantPhoto')->name('api.restaurant.photo');

    Route::get('/food/{id}','PhotoController@getFoodPhoto')->name('api.food.photo');

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

            Route::get('/menu/detail/{id}', ['as' => 'portal.menu.detail', 'uses' => 'MenuController@getDetail']);

            Route::get('/menu/detail/delete/{id}', ['as' => 'portal.menu.delete', 'uses' => 'MenuController@doDeleteMenu']);

            Route::get('/menu/detail/edit/{id}', ['as' => 'portal.menu.edit', 'uses' => 'MenuController@getEditMenu']);

            Route::post('/menu/detail/edit/{id}', ['as' => 'portal.menu.edit.store', 'uses' => 'MenuController@doStoreEditMenu']);

            Route::get('/menu/detail/photo/{id}', ['as' => 'portal.menu.photo', 'uses' => 'MenuController@getEditPhoto']);

            Route::post('/menu/detail/photo/{id}', ['as' => 'portal.menu.photo.store', 'uses' => 'MenuController@doStoreEditPhoto']);

        });

        Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
//            Overview
            Route::get('/overview', ['as' => 'admin.dashboard', 'uses' => 'adminController@getDashboard']);

//            Categories
            Route::get('/categories', ['as' => 'admin.categories', 'uses' => 'adminController@getCategoriesList']);

            Route::get('/categories/new', ['as' => 'admin.categories.new', 'uses' => 'adminController@getNewCategories']);

            Route::post('/categories/new', ['as' => 'admin.categories.new.store', 'uses' => 'adminController@doStoreCategories']);

            Route::get('/categories/edit/{id}', ['as' => 'admin.categories.edit', 'uses' => 'adminController@getEditCategories']);

            Route::post('/categories/edit/{id}', ['as' => 'admin.categories.edit.store', 'uses' => 'adminController@doStoreEditCategories']);

            Route::get('/categories/delete/{id}', ['as' => 'admin.categories.delete', 'uses' => 'adminController@doDeleteCategories']);


//            Restaurants
            Route::get('/restaurant/new', ['as' => 'admin.restaurant.new', 'uses' => 'adminController@getNewRestaurant']);

            Route::get('/restaurant/detail/{id}', ['as' => 'admin.restaurant.detail', 'uses' => 'adminController@getRestaurantDetail']);

            Route::get('/restaurant/edit/{id}', ['as' => 'admin.restaurant.edit', 'uses' => 'adminController@getEditRestaurant']);

            Route::post('/restaurant/edit/{id}', ['as' => 'admin.restaurant.edit.store', 'uses' => 'adminController@doEditRestaurant']);

            Route::get('/restaurant/photo/{id}', ['as' => 'admin.restaurant.photo', 'uses' => 'adminController@getEditRestaurantPhoto']);

            Route::post('/restaurant/photo/{id}', ['as' => 'admin.restaurant.photo.store', 'uses' => 'adminController@doEditRestaurantPhoto']);

            Route::get('/restaurant/delete/{id}', ['as' => 'admin.restaurant.delete', 'uses' => 'adminController@doDeleteRestaurant']);

            Route::post('/restaurant/new', ['as' => 'admin.restaurant.new.store', 'uses' => 'adminController@doStoreNewRestaurant']);

//            Menus
            Route::get('/menu/detail/{id}', ['as' => 'admin.menu.detail', 'uses' => 'adminController@getFoodDetail']);

//            Collections
            Route::get('/collection', ['as' => 'admin.collection', 'uses' => 'adminController@getCollectionsList']);

            Route::get('/collection/new', ['as' => 'admin.collection.new', 'uses' => 'adminController@getNewCollections']);

            Route::post('/collection/new', ['as' => 'admin.collection.new.store', 'uses' => 'adminController@doStoreCollections']);

            Route::get('/collection/delete/{id}', ['as' => 'admin.collection.delete', 'uses' => 'adminController@doDeleteCollection']);

            Route::get('/collection/edit/{id}', ['as' => 'admin.collection.edit', 'uses' => 'adminController@getEditCollections']);

            Route::post('/collection/edit/{id}', ['as' => 'admin.collection.edit.store', 'uses' => 'adminController@doStoreEditCollections']);

        });

    });

});
