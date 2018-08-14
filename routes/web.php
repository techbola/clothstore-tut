<?php

Route::get('/', [
  'uses' => 'FrontEndController@index',
  'as' => 'index'
]);

Route::get('shop', [
    'uses' => 'FrontEndController@store',
    'as' => 'store'
]);

Route::get('product/{slug}', [
    'uses' => 'FrontEndController@productDetails',
    'as' => 'productDetails'
]);

Route::get('blog', [
    'uses' => 'FrontEndController@blog',
    'as' => 'blog'
]);

Route::get('post/{slug}', [
    'uses' => 'FrontEndController@singlePost',
    'as' => 'singlePost'
]);

Route::get('contact', [
    'uses' => 'FrontEndController@contact',
    'as' => 'contact'
]);

Route::post('/mail', [

    'uses' => 'FrontEndController@contactStore',
    'as' => 'contact.store'
]);

Route::get('/cart', [

    'uses' => 'ShoppingController@cart',
    'as' => 'cart'
]);

Route::get('/cart/delete/{id}', [

    'uses' => 'ShoppingController@cartDelete',
    'as' => 'cart.delete'
]);

Route::post('/cart/add', [

    'uses' => 'ShoppingController@addToCart',
    'as' => 'cart.add'
]);

Route::get('/cart/checkout', [

    'uses' => 'CheckOutController@index',
    'as' => 'cart.checkout'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {

    Route::get('/dashboard', [
        'uses' => 'AdminController@dashboard',
        'as' => 'admin.dashboard'
    ]);

    Route::resource('products', 'ProductsController');

    Route::resource('posts', 'PostController');

});
