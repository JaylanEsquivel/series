<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/LoginUser', 'ViewController@Loginuser');
Route::get('/RegistrerUser', 'ViewController@Registreruser');


Route::get('/admin', 'RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboardone', 'ComunController@dashboard');

Route::group(['middleware' => 'admin'], function() {
    Route::get('/teste', 'ViewController@teste');
    Route::get('/dashboard', 'AdminController@dashboard');
});

Auth::routes();
