<?php

#Cms & Middleware
Route::middleware(['adminguard'])->group(function () {

    Route::prefix('cms')->group(function () {
        Route::get('dashboard', 'CmsController@dashboard');
        Route::get('orders', 'CmsController@orders');
        Route::resource('menu', 'MenuController');
        Route::resource('content', 'ContentController');
        Route::resource('categories', 'CategoryController');
        Route::resource('carousels', 'CarouselController');
        Route::resource('products', 'ProductController');
        Route::resource('users', 'UsercmsController');
        Route::get('contactus', 'CmsController@contactus');
        Route::post('contactus', 'CmsController@contactus');
    });
});

#Shop
Route::prefix('invest')->group(function () {
    Route::get('/', 'InvestController@categories');
    Route::get('order', 'InvestController@order');
    Route::get('update-cart', 'InvestController@updateCart');
    Route::get('remove-item', 'InvestController@removeItem');
    Route::get('clear-cart', 'InvestController@clearCart');
    Route::get('checkout', 'InvestController@checkout');
    Route::get('add-to-cart', 'InvestController@addToCart');
    Route::get('{curl}', 'InvestController@products');
    Route::get('{curl}/{purl}', 'InvestController@item');
});

#User
Route::prefix('user')->group(function () {

    Route::get('profile', 'UserController@profile');
    Route::post('profile', 'UserController@postMessage');
    Route::get('signin', 'UserController@getSignin');
    Route::post('signin', 'UserController@postSignin');
    Route::get('signup', 'UserController@getSignup');
    Route::post('signup', 'UserController@postSignup');
    Route::get('logout', 'UserController@logout');
});

#Pages
Route::get('/', 'PagesController@home');
Route::get('/aboutus', 'PagesController@aboutus');
Route::get('/contactus', 'PagesController@contactus');
Route::post('/contactus', 'PagesController@contactus');

Route::get('{url}', 'PagesController@content'); #dynamic pages link
