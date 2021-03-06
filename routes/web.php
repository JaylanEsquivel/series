<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'ViewController@dashboard');
Route::get('/copia', 'ViewController@sair');

//--------------------------- ROTAS DE CATEGORIA ------------------------------
Route::group(['middleware' => 'admin'], function() {
    Route::get('/categoria', 'CategoriaController@index');
    Route::post('/categoria/cadastrar', 'CategoriaController@store');
    Route::get('/categoria/excluir/{id}', 'CategoriaController@destroy');
    Route::get('/categoria/editar/{id}', 'CategoriaController@edit');
    Route::post('/categoria/atualizar/', 'CategoriaController@update');
});
//-----------------------------------------------------------------------------

//--------------------------- ROTAS DE SERIE ----------------------------------
Route::group(['middleware' => 'admin'], function() {
    Route::get('/series', 'SeriesController@index');
    Route::post('/series/cadastrar', 'SeriesController@store');
    Route::get('/series/excluir/{id}', 'SeriesController@destroy');
    Route::get('/series/editar/{id}', 'SeriesController@edit');
    Route::post('/series/atualizar/', 'SeriesController@update');
});
//-----------------------------------------------------------------------------

//--------------------------- ROTAS DE EPISODIO ----------------------------------
Route::group(['middleware' => 'admin'], function() {
    Route::get('/episodio', 'EpisodioController@index');
    Route::post('/episodio/cadastrar', 'EpisodioController@store');
    Route::get('/episodio/excluir/{id}', 'EpisodioController@destroy');
    Route::get('/episodio/editar/{id}', 'EpisodioController@edit');
    Route::post('/episodio/atualizar/', 'EpisodioController@update');
    Route::post('/episodio/procurar/', 'EpisodioController@procurar');
});
//-----------------------------------------------------------------------------

Route::group(['middleware' => 'admin'], function() {
    Route::get('/teste', 'ViewController@teste');
});

Auth::routes();
