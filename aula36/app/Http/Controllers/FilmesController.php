<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Aula 36 - Laravel II - Exercício 01b
class FilmesController extends Controller
{
    public function procurarFilmeId($id){
    	$filmes = [
			1 => "Toy Story",
			2 => "Procurando Nemo",
			3 => "Avatar",
			4 => "Star Wars: Episódio V",
			5 => "Up",
			6 => "Mary e Max"
		];
		return '
			<h1>Aula 36 | Laravel II | Exercício 1b</h1>
			<cite>O nome do filme buscado <i>(pelo id '.$id.')</i> é <b>'.$filmes[$id].'</b></cite>
		';
	}
}
