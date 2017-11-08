<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'ViewController@dashboard');
Route::get('/copia', 'ViewController@sair');

Route::group(['middleware' => 'admin'], function() {
    Route::get('/teste', 'ViewController@teste');
});

Auth::routes();
