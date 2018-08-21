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

	// Listar
	Route::get('/filmes', 'MoviesController@listarFilmes');

	// Buscar
	Route::post('/filme/buscarNomeFilme', 'MoviesController@buscarNomeFilme');
	Route::post('/filme/buscarIdFilme', 'MoviesController@buscarIdFilme');

	// Adicionar
	Route::get('/form', 'MoviesController@adicionar');
	Route::post('/adicionarFilme', 'MoviesController@adicionarFilme');

// ATORES

	// Listar
	Route::get('/atores', 'ActorsController@listarAtores');

	// Buscar
	Route::post('/ator/buscarNomeAtor/', 'ActorsController@buscarNomeAtor');
	Route::post('/ator/buscarIdAtor/', 'ActorsController@buscarIdAtor');
	Route::get('/ator/{id}', 'ActorsController@linkarAtorPorId');

	// Adicionar
	Route::get('/add', 'ActorsController@adicionar');
	Route::post('/adicionarAtor', 'ActorsController@adicionarAtor');

	// Editar
	Route::get('ator/form_edit/{id}', 'ActorsController@edit');
	Route::post('ator/edit', 'ActorsController@update');

	// Apagar
	Route::get('ator/form_del/{id}', 'ActorsController@apagar');
	Route::delete('ator/delete/{id}', 'ActorsController@delete');	