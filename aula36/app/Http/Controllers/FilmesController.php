<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Aula 36 - Laravel II - Exercício 01b
class FilmesController extends Controller
{
    
    private $listaFilmes = [
        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
      ];

    public function listarFilmes() {
      return view('filme')->with('listaFilmes', $this->listaFilmes);
    }

    public function procurarFilmeId($id){
        foreach ($this->listaFilmes as $idFilme => $tituloFilme){
            if ($id == $idFilme){
                $resultado = 'ok';
                break;
            } else {
                $resultado = '';
            }
        }
        return view('filme')
            ->with('id', $id)
            ->with('tituloFilme', $tituloFilme)
            ->with('listaFilmes', $this->listaFilmes)
            ->with('resultado', $resultado);
    }
}