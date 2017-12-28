<?php

/**
Route::get('/', function () {
    return view('welcome');
});
 */


Route::get('/','TestController@welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
