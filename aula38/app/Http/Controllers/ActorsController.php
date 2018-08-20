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
        $atorPorId = Actor::where('id', $idBuscado)->get();
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

    public function linkarAtorPorId($id){
        $atorPorLinkId = Actor::find($id);
        return view('atores')
        ->with('atorPorLinkId', $atorPorLinkId)
        ->with('idLinkBuscado', $id);
    }

    public function adicionar() {
        return view('add');
    }

    public function adicionarAtor(Request $request) {
                
                $nomeCompleto = $request->input('first_name').' '.$request->input('last_name');
                $nomeBd = Actor::where('first_name',$request->input('first_name'))->get();
                $nomeInput = $request->input('first_name');
                $sobrenomeBd = Actor::where('last_name', $request->input('last_name'))->get();
                $sobrenomeInput = $request->input('last_name');
                $atorJaCadastrado = 'Ator já cadastrado';
                $atorExistente = Actor::where('first_name', '=',$nomeInput)->where('last_name', '=', $sobrenomeInput)->get();

                $this->validate($request, [
                  'first_name' => 'required|max:100',
                  'last_name' => 'required|max:100',
                  'rating' => 'required|numeric|min:0|max:10',
                  'picture_url' => 'max:500',
                  'favorite_movie_id' => 'required|numeric|min:0',
                ]);

            if (count($nomeBd) > 0 && count($sobrenomeBd) > 0){
                return view('add')
                    ->with('atorJaCadastrado', $atorJaCadastrado)
                    ->with('nomeCompleto', $nomeCompleto)
                    ->with('atorExistente', $atorExistente);
            
            } else {
                
                $novoAtor = Actor::create([
                    'first_name' => $request->input('first_name'),
                    'last_name' => $request->input('last_name'),
                    'rating' => $request->input('rating'),
                    'picture_url' => $request->input('picture_url'),
                    'favorite_movie_id' => $request->input('favorite_movie_id')
                ]);

                $salvarAtor = $novoAtor->save();

                if ($salvarAtor) {
                $atores = Actor::all();
                  return view('add')
                    ->with('novoAtor', $novoAtor)
                    ->with('nomeCompleto', $nomeCompleto)
                    ->with('atorSalvo', true)
                    ->with('atores', $atores);
                }
            }
    }

    public function edit($id) {
        $atorParaEditarId = Actor::find($id);
        return view('ator/form_edit')
        ->with('atorParaEditarId', $atorParaEditarId)
        ->with('idLinkBuscado', $id);
    }

    public function update() {
        return view('atores');
    }



}