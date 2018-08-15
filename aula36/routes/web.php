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

Route::get('/filmes', 'FilmesController@listarFilmes');

Route::get('/filmes/procurarId/{id}', 'FilmesController@procurarFilmeId');

Route::get('/filmes/procurarTitulo/{titulo}', 'FilmesController@procurarFilmeTitulo');

Route::get('/adicionarFilme/{novoTitulo}', 'FilmesController@adicionarFilme');

Route::get('/todosOsFilmes', 'FilmesController@listarTodosOsFilmes');