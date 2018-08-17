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


    public function procurarFilmeTitulo($titulo){
        $tituloBuscado = $titulo;
        $filmePorTitulo = Movie::where('title', $tituloBuscado)->get();
        if (count($filmePorTitulo) == 0) {
            return view('filmes')
            ->with('filmePorTitulo', null)
            ->with('titulo', null)
            ->with('tituloBuscado', $tituloBuscado);
        } elseif ($titulo == null) {
            return view('filmes');
        } else {
            return view('filmes')
            ->with('filmePorTitulo', $filmePorTitulo)
            ->with('titulo', $titulo)
            ->with('tituloBuscado', $tituloBuscado);
        }
    }

}
