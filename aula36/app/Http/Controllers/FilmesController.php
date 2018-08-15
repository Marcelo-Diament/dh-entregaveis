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
        6 => "Mary e Max",
        7 => "Titanic"
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
                $resultado = 'Não encontrado';
                $tituloFilme = null;
            }
        }
        return view('filme')
            ->with('idFilme', $id)
            ->with('tituloFilme', $tituloFilme)
            ->with('listaFilmes', $this->listaFilmes)
            ->with('resultado', $resultado);
    }

    public function procurarFilmeTitulo($titulo){
        foreach ($this->listaFilmes as $idFilme => $tituloFilme){
            if ($titulo == $tituloFilme){
                $resultado = 'ok';
                break;
            } elseif ($titulo != $tituloFilme && $idFilme >= 7) {
                $resultado = 'Não encontrado';
                $idFilme = null;
                $tituloFilme = $titulo;
            } else {
                $resultado = null;
                $idFilme = null;
                $tituloFilme = null;
            }
        }
        return view('filme')
            ->with('idFilme', $idFilme)
            ->with('tituloFilme', $tituloFilme)
            ->with('listaFilmes', $this->listaFilmes)
            ->with('resultado', $resultado);
    }
}