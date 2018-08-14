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

// Aula 35 - Laravel I - Exercício 01
Route::get('/', function () {
    return view('welcome');
});

// Aula 35 - Laravel I - Exercício 02a
Route::get('/meuPrimeiroCaminho', function () {
    return '<h1>Aula 35 | Laravel I | Exercício 2a</h1><cite>Criei meu primeiro caminho em Laravel</cite>';
});

// Aula 35 - Laravel I - Exercício 02b
Route::get('/resultado/{numero}', function ($numero) {
    if ($numero % 2 == 0){
    	return '<h1>Aula 35 | Laravel I | Exercício 2b</h1><cite>O número '.$numero.' é par</cite>';
	}else {
		return '<h1>Aula 35 | Laravel I | Exercício 2b</h1><cite>O número '.$numero.' é ímpar</cite>';
	}
});

// Aula 35 - Laravel I - Exercício 02c
Route::get('/resultado/{numero1}/numeroOpcional/{numero2?}', function ($numero1, $numero2=null) {
   	switch($numero2){
   	case (null):
   		if ($numero1 % 2 == 0){ return '
			<h1>Aula 35 | Laravel I | Exercício 2c</h1>
			<cite>Recebemos apenas o número '.$numero1.', que é <b>par</b>.
	    	<br/>
	    	Para visualizar o produto da multiplicação entre '.$numero1.' e outro número, insira o segundo valor após "numeroOpcional/".</cite>';
		} else { return '
			<h1>Aula 35 | Laravel I | Exercício 2c</h1>
   			<cite>Recebemos apenas o número '.$numero1.', que é <b>ímpar</b>.
	    	<br/>
	    	Para visualizar o produto da multiplicação entre '.$numero1.' e outro número, insira o segundo valor após "numeroOpcional/".</cite>';
		}
	    break;
   	case (!null):
   		$numeroFinal = $numero1 * $numero2;
   		return '<h1>Aula 35 | Laravel I | Exercício 2c</h1><cite>O número '.$numero1.' vezes o '.$numero2.' dá '.$numeroFinal.'</cite>';
		break;
	}
});