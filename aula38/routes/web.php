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

Route::get('/form', function () {
    return view('form');
});

Route::get('/atores', 'ActorsController@listarAtores');

Route::get('/ator/buscarNomeAtor/{nomeAtor}', 'ActorsController@buscarNomeAtor');

Route::get('/ator/buscarIdAtor/{idAtor}', 'ActorsController@buscarIdAtor');

Route::get('/filmes', 'MoviesController@listarFilmes');

Route::post('/filme/buscarNomeFilme', 'MoviesController@buscarNomeFilme');

Route::post('/filme/buscarIdFilme', 'MoviesController@buscarIdFilme');

Route::get('/form', 'MoviesController@adicionar');

Route::post('/adicionarFilme', 'MoviesController@adicionarFilme');
