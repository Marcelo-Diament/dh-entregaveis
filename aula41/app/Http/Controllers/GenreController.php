<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class GenreController extends Controller
{

    public function listarGeneros(){
        $generos = Genre::all();
        return view('genre')
            ->with('generos', $generos);
    }

    public function generoPorId(Request $idGenero){
        $idBuscado = $idGenero->input('idGenero');
        $generoPorId = Genre::where('id', $idBuscado)->get();
        $filmesPorGenero = $generoPorId[0]->filmes;

            return view('genreFilmes')
            ->with('idGenero', $idGenero)
            ->with('generoPorId', $generoPorId)
            ->with('idGenero', $idGenero)
            ->with('idBuscado', $idBuscado)
            ->with('filmesPorGenero', $filmesPorGenero);
     
    }

    public function generoId($id){
        $generoViaId = Genre::where('id', $id)->get();
        $generos = Genre::all();
        $qtGen = 0;
        foreach ($generos as $genre) {
            $qtGen++;
        }
        if ($id <= $qtGen){
        $filmesDoGenero = $generoViaId[0]->filmes;

            return view('genreFilmes')
            ->with('id', $id)
            ->with('generoViaId', $generoViaId)
            ->with('filmesDoGenero', $filmesDoGenero);
        } else {
            return view('genreFilmes')
                ->with('id', $id);
        }
    }

    

}
