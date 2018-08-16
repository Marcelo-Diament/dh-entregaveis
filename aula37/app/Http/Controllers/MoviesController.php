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
}
