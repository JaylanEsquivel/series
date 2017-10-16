<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'admin'], function() {
    Route::get('/teste', 'ViewController@teste');
});

Auth::routes();
