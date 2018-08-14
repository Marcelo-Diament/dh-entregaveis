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
	public function procurarFilmeNome($nome){
	    $filmes = [
			1 => "Toy Story",
			2 => "Procurando Nemo",
			3 => "Avatar",
			4 => "Star Wars: Episódio V",
			5 => "Up",
			6 => "Mary e Max"
		];
		$filmeEncontrado = array_search($nome, $filmes);
		if ($filmeEncontrado != null){
			return '
				<h1>Aula 36 | Laravel II | Exercício 1c</h1>
				<cite>Encontramos o filme <b>'.$nome.'</b>, seu id é <b>'.$filmeEncontrado.'</b>.</cite>
			';
		} else {
			echo '
				<h1>Aula 36 | Laravel II | Exercício 1c</h1>
				<cite>Ops! Desculpe, não pudemos encontrar o filme <b>'.$nome.'</b>...
				<br/>
				Por favor, verifique se digitou o nome corretamente e tente novamente.
				<br/>
				Se preferir, confira a lista de todos os filmes cadastrados a seguir:</cite>
				<ul>';
					foreach ($filmes as $idFilme => $filme){
						echo '<li><b>'.$filme.'</b></li>';
					};
				echo '</ul>
			';
		}
	}
}
