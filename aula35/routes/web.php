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
    return '<h1 style="font-size: 65px;margin: 50px auto;text-align:center;color:#fa503a;">Criei meu primeiro caminho em Laravel =)</h1>';
});

// Aula 35 - Laravel I - Exercício 02b
Route::get('/resultado/{numero}', function ($numero) {
    if ($numero & 1){
    	return '<h1 style="font-size: 65px;margin: 50px auto;text-align:center;color:#fa503a;">O número '.$numero.' é ímpar</h1>';
	}else {
		return '<h1 style="font-size: 65px;margin: 50px auto;text-align:center;color:#fa503a;">O número '.$numero.' é par</h1>';
	}
});

// Aula 35 - Laravel I - Exercício 02c
Route::get('/resultado/{numero1}/numeroOpcional/{numero2?}', function ($numero1, $numero2=null) {
   	switch($numero2){
   	case (null):
   		if ($numero1 % 2 == 0){ return '
			<h1 style="font-size: 65px;margin: 50px auto;text-align:center;color:#fa503a;">
			Recebemos apenas o número '.$numero1.', que é <b>par</b>.</h1>
	    	<br/>
	    	<p style="font-size: 40px;width: 75%; margin: 20px auto;text-align:center;color:#636b6f;"> Para visualizar o produto da multiplicação entre '.$numero1.' e outro número, insira o segundo valor após "numeroOpcional/".</p>';
		} else { return '
			<h1 style="font-size: 65px;margin: 50px auto;text-align:center;color:#fa503a;">
   			Recebemos apenas o número '.$numero1.', que é <b>ímpar</b>.</h1>
	    	<br/>
	    	<p style="font-size: 40px;width: 75%; margin: 50px auto;text-align:center;color:#636b6f;">Para visualizar o produto da multiplicação entre '.$numero1.' e outro número, insira o segundo valor após "numeroOpcional/".</p>';
		}
	    break;
   	case (!null):
   		$numeroFinal = $numero1 * $numero2;
   		return '<h1 style="font-size: 65px;margin: 50px auto;text-align:center;color:#fa503a;">O número '.$numero1.' vezes o '.$numero2.' dá '.$numeroFinal.'</h1>';
		break;
	}
});