<?php

Route::get('/', [
  'uses' => 'FrontEndController@index',
  'as' => 'index'
]);
Route::get('store', [
    'uses' => 'FrontEndController@store',
    'as' => 'store'
]);
Route::get('blog', [
    'uses' => 'FrontEndController@blog',
    'as' => 'blog'
]);
Route::get('contact', [
    'uses' => 'FrontEndController@contact',
    'as' => 'contact'
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
