<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'ViewController@dashboard');

Route::group(['middleware' => 'admin'], function() {
    Route::get('/teste', 'ViewController@teste');
});

Route::get('/borda', function () {
    return view('bordas');
});

Auth::routes();
