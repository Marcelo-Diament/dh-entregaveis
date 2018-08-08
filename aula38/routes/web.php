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

/* ROTAS DE FILMES */
Route::get('/filmes', "formController@exibirFilmes");
Route::get('/adicionarFilme', "formController@adicionarFilme");
Route::post('/filme/add', "formController@cadastrarFilme");
Route::get('/filme/edit/{id}', "formController@editarFilme");
Route::put('/filme/edit/{id}', "formController@atualizarFilme");
Route::get('/filme/delete/{id}', "formController@excluirFilme");
Route::delete('/filme/delete/{id}', "formController@deletarFilme");


/* ROTAS DE ATORES */
// Route::get('/actors', "ActorController@exibiractors");
// Route::get('/actor/add', "ActorController@exibirAtor");
// Route::post('/actor/add', "ActorController@cadastrarAtor");
// Route::get('/actor/edit/{id}', "ActorController@editarAtor");
// Route::put('/actor/edit/{id}', "ActorController@atualizarAtor");
// Route::get('/actor/delete/{id}', "ActorController@excluirAtor");
// Route::delete('/actor/delete/{id}', "ActorController@deletarAtor");


Route::get('/actors', "ActorController@actors");
Route::post('/add', "ActorController@adicionar");
Route::post('/add/salvar', "ActorController@salvar");
Route::post('/add/remove', "ActorController@deletar");