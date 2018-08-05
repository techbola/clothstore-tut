<?php

Route::get('/', [
  'uses' => 'FrontEndController@index',
  'as' => 'index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
