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

Route::get('/atores', 'ActorsController@directory');

Route::post('/atores/procurar', 'ActorsController@search');

Route::get('/ator/{id}', 'ActorsController@show');

Route::get('/filmes', 'MoviesController@listarFilmes');

Route::get('/filmes/procurarId/{id}', 'MoviesController@procurarFilmeId');

Route::get('/filmes/procurarTitulo/{titulo}', 'MoviesController@procurarFilmeTitulo');

Route::get('/adicionarFilme/{novoTitulo}', 'MoviesController@adicionarFilme');

Route::get('/todosOsFilmes', 'MoviesController@listarTodosOsFilmes');