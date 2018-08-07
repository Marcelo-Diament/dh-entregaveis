<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filmes;

class FormController extends Controller
{
    public function exibirForm (){
        return view('form');
    }

    public function cadastrar ( Request $request){
        $this->validate($request, [
            'title' => 'required|unique:movies|max:500',
            'rating' => 'required|integer|min:0|max:10',
            'awards' => 'required|integer|min:0|max:99',
            'length' => 'required|integer',
            'release_date' => 'required'
        ]);

        $filme = Filmes::create([
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'awards' => $request->input('awards'),
            'length' => $request->input('length'),
            'release_date' => $request->input('release_date')
        ]);

        $sucesso = $filme->save();

        if($sucesso){
            return view('form')->with('sucesso',true);
        } else {
            return view('form')->with('ocorreuErro',true);
        }
        
    }

    public function salvar (Request $request){

        $cadastroFilme = Filmes::create($request->all());
        // o request all só se aplica se todos os campos são salvos se houvesse um campo que não pode ser inserido na mesma tabela aí teríamos de fazer o request input a input
        $cadastroFilme->save();
    }

    public function atualizar (Request $request){

        $input =Filmes::find('title');
        $input->title = $request->input('title');
        
        $input->save();
    }

    public function deletar (Request $request){

        $input =Filmes::find('title');
        $input->delete();
    }
}
