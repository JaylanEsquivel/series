<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['Middleware' => 'user'], function() {

});
Route::group(['Middleware' => 'admin'], function() {

});
