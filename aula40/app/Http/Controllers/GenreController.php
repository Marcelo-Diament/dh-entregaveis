<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class GenreController extends Controller
{
    public function show($id){

        // $todosGeneros = Genre::all();
        // $quantidadeGeneros = count($todosGeneros);
        // if ($id < $quantidadeGeneros){
        $generoPorId = Genre::find($id);
        if ($generoPorId) {
            $filmesPorGenero = $generoPorId->movies;
        } else {
            $filmesPorGenero = false;
        }
        return view('genre')
            ->with('genero', $generoPorId)
            ->with('filmesPorGenero', $filmesPorGenero);
    }

    

}
