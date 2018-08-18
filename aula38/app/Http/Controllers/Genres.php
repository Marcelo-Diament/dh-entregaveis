<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Integrando ao Model Genre
use App\Genre;

// Integrando ao Model Movie
use App\Movie;

class Genres extends Controller
{
    public function listarGeneros(){
    	$generos = Genre::all();
    	return view('generos')
    		->with('generos', $generos);
    }
}
