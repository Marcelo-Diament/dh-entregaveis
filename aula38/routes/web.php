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

Route::get('/form', "formController@form");

Route::post('/adicionar', "formController@adicionar");



Route::get('/actors', "ActorController@actors");

Route::post('/add', "ActorController@adicionar");

Route::post('/add/salvar', "ActorController@salvar");

Route::post('/add/remove', "ActorController@deletar");