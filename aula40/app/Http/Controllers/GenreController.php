<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function show($id){
        $generoPorId = Genre::find($id);
        $filmesPorGenero = $generoPorId->movies;
        return view('genre')
            ->with('genero', $generoPorId)
            ->with('filmesPorGenero', $filmesPorGenero);
    }

    

}
