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

// Aula 36 - Laravel II - Exercício 01b
//Route::get('/filmes/{id}', 'FilmesController@procurarFilmeId');

// Aula 36 - Laravel II - Exercício 01c
Route::get('/filmes/procurar/{nome}', 'FilmesController@procurarFilmeNome');

// Aula 36 - Laravel II - Exercício 02a e 02b
Route::get('/filmes', function () {
	return view('filme');
});

// Aula 36 - Laravel II - Exercício 02c
Route::get('/filmes/{id}', 'FilmesController@procurarFilmeId');