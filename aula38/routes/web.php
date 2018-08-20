<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// FILMES

Route::get('/filmes', 'MoviesController@listarFilmes');

Route::post('/filme/buscarNomeFilme', 'MoviesController@buscarNomeFilme');

Route::post('/filme/buscarIdFilme', 'MoviesController@buscarIdFilme');

Route::get('/form', 'MoviesController@adicionar');

Route::post('/adicionarFilme', 'MoviesController@adicionarFilme');

// ATORES

Route::get('/atores', 'ActorsController@listarAtores');

Route::post('/ator/buscarNomeAtor/', 'ActorsController@buscarNomeAtor');

Route::post('/ator/buscarIdAtor/', 'ActorsController@buscarIdAtor');

Route::get('/ator/{id}', 'ActorsController@linkarAtorPorId');

Route::get('/add', 'ActorsController@adicionar');

Route::post('/adicionarAtor', 'ActorsController@adicionarAtor');

Route::get('ator/form_edit/{id}', 'ActorsController@edit');

Route::post('ator/edit', 'ActorsController@update');
