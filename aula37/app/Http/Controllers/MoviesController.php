<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Integrando ao Model Movie
use App\Movie;

class MoviesController extends Controller
{
    public function listarFilmes(){
    	$filmes = Movie::all();
    	return view('filmes')
    		->with('filmes', $filmes);
    }


    public function procurarFilmeId($id){
    	$filmePorId = Movie::find($id);
        $idBuscado = $id;
    	return view('filmes')
    	->with('filmePorId', $filmePorId)
    	->with('idBuscado', $id);
    }

    // public function procurarFilmeTitulo($titulo){
    //     foreach ($this->listaFilmes as $idFilme => $tituloFilme){
    //         if ($titulo == $tituloFilme){
    //             $resultado = 'ok';
    //             break;
    //         } elseif ($titulo != $tituloFilme && $idFilme >= 7) {
    //             $resultado = 'Não encontrado';
    //             $idFilme = null;
    //             $tituloFilme = $titulo;
    //         } else {
    //             $resultado = null;
    //             $idFilme = null;
    //             $tituloFilme = null;
    //         }
    //     }
    //     return view('filmes')
    //         ->with('idFilme', $idFilme)
    //         ->with('tituloFilme', $tituloFilme)
    //         ->with('listaFilmes', $this->listaFilmes)
    //         ->with('resultado', $resultado);
    // }

    // public function adicionarFilme($novoTitulo){
    //     if (isset($novoTitulo)){
    //         $this->listaFilmes[] = $novoTitulo;
    //     }
    //     return view('filmes')
    //         ->with('listaFilmes', $this->listaFilmes)
    //         ->with('novoTitulo', $novoTitulo);
    // }

}
