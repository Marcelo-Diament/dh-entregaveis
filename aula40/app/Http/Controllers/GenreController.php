<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class GenreController extends Controller
{

    public function listarGeneros(){
        $generos = Genre::all();
        return view('generos')
            ->with('generos', $generos);
    }

    public function show($id){

        $generoPorId = Genre::find($id);
        if ($generoPorId) {
            $filmesPorGenero = $generoPorId->filmes;
        } else {
            $filmesPorGenero = false;
        }
        return view('genre')
            ->with('generoPorId', $generoPorId)
            ->with('filmesPorGenero', $filmesPorGenero);
    }

    

}
