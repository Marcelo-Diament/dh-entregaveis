<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Integrando ao Model Movie
use App\Movie;

// Integrando ao Model Actor
use App\Actor;

// Integrando ao Model Genre
use App\Genre;

class MoviesController extends Controller{

    public function listarFilmes(){
    	$filmes = Movie::all();
    	return view('filmes')
    		->with('filmes', $filmes);
    }

    public function buscarNomeFilme(Request $nomeFilme){
        $nomeBuscado = $nomeFilme->input('nomeFilme');
        $filmePorNome = Movie::where('title', $nomeBuscado)->get();
        if (count($filmePorNome) == 0) {
            return view('filmes')
            ->with('filmePorNome', null)
            ->with('nomeFilme', null)
            ->with('nomeBuscado', $nomeBuscado);
        } elseif ($nomeFilme == null) {
            return view('filmes');
        } else {
            return view('filmes')
            ->with('filmePorNome', $filmePorNome)
            ->with('nomeFilme', $nomeFilme)
            ->with('nomeBuscado', $nomeBuscado);
        }
    }

    public function buscarIdFilme(Request $idFilme){
        $idBuscado = $idFilme->input('idFilme');
        $filmePorId = Movie::where('id', $idBuscado)->get();
        if (count($filmePorId) == 0) {
            return view('filmes')
            ->with('filmePorId', null)
            ->with('idFilme', null)
            ->with('idBuscado', $idBuscado);
        } elseif ($idFilme == null) {
            return view('filmes');
        } else {
            return view('filmes')
            ->with('filmePorId', $filmePorId)
            ->with('idFilme', $idFilme)
            ->with('idBuscado', $idBuscado);
        }
    }

    public function adicionar() {
    	return view('form');
  	}

    public function adicionarFilme(Request $request) {
	    $this->validate($request, [
	      'title' => 'required|max:100|unique:movies',
	      'rating' => 'required|numeric|min:0|max:10',
	      'awards' => 'required|numeric|min:0',
	      'length' => 'required|numeric|min:10',
	      'release_date' => 'required|date',
          'genre_id' => 'required|numeric|min:0'
	    ]);
	    $novoFilme = Movie::create([
	      'title' => $request->input('title'),
	      'rating' => $request->input('rating'),
	      'awards' => $request->input('awards'),
	      'length' => $request->input('length'),
	      'release_date' => $request->input('release_date'),
          'genre_id' => $request->input('genre_id')
	    ]);
	    $salvarFilme = $novoFilme->save();
        if ($salvarFilme) {
          return view('form')
            ->with('novoFilme', $novoFilme)
            ->with('filmeSalvo', true);
        } else {
            $filmeComErro = $this->title;
	      return view('form')
            ->with('novoFilme', $novoFilme)
            ->with('filmeComErro', $filmeComErro)
	      	->with('filmeNaoSalvo', false);
	    }
	  }

}