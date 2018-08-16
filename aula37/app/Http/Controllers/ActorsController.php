<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Integrando ao Model Actor
use App\Actor;

class ActorsController extends Controller
{
    public function directory(){
    	$atores = Actor::all();
    	return view('atores')
    		->with('atores', $atores);
    }

    public function show($id){
    	$atorPorId = Actor::find($id);
    	return view('atores')
    	->with('atorPorId', $atorPorId)
    	->with('idBuscado', $id);
    }

    public function search(Request $nomeAtor){
        $nomeBuscado = $nomeAtor->input('nomeAtor');
        $atorPorNome = Actor::where('first_name', $nomeBuscado)->get();
        if (count($atorPorNome) == 0) {
            return view('atores')
            ->with('atorPorNome', null)
            ->with('nomeAtor', null)
            ->with('nomeBuscado', $nomeBuscado);
        } else {
            return view('atores')
            ->with('atorPorNome', $atorPorNome)
            ->with('nomeAtor', $nomeAtor)
            ->with('nomeBuscado', $nomeBuscado);
        }
    }

}
