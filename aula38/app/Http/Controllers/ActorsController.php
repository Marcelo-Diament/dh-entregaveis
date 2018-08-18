<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Integrando ao Model Actor
use App\Actor;

// Integrando ao Model Movie
use App\Movie;

class ActorsController extends Controller
{
    public function listarAtores(){
    	$atores = Actor::all();
    	return view('atores')
    		->with('atores', $atores);
    }

    public function buscarNomeAtor(Request $nomeAtor){
        $nomeBuscado = $nomeAtor->input('nomeAtor');
        $atorPorNome = Actor::where('first_name', $nomeBuscado)->get();
        if (count($atorPorNome) == 0) {
            return view('atores')
            ->with('atorPorNome', null)
            ->with('nomeAtor', null)
            ->with('nomeBuscado', $nomeBuscado);
        } elseif ($nomeAtor == null) {
            return view('atores');
        } else {
            return view('atores')
            ->with('atorPorNome', $atorPorNome)
            ->with('nomeAtor', $nomeAtor)
            ->with('nomeBuscado', $nomeBuscado);
        }
    }

    public function buscarIdAtor(Request $idAtor){
        $idBuscado = $idAtor->input('idAtor');
        $atorPorId = Actor::where('first_name', $idBuscado)->get();
        if (count($atorPorId) == 0) {
            return view('atores')
            ->with('atorPorId', null)
            ->with('idAtor', null)
            ->with('idBuscado', $idBuscado);
        } elseif ($idAtor == null) {
            return view('atores');
        } else {
            return view('atores')
            ->with('atorPorId', $atorPorId)
            ->with('idAtor', $idAtor)
            ->with('idBuscado', $idBuscado);
        }
    }

}