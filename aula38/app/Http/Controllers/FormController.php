<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filmes;

class FormController extends Controller
{
    public function form (){
        return view('form');
    }

    public function adicionar ( Request $request){
        $this->validate($request, [
            'title' => 'required|unique:movies|max:500',
            'rating' => 'required|integer|min:0|max:10',
            'awards' => 'required|integer|min:0|max:99',
            'length' => 'required|integer'
        ]);
        return view('form', [ 'request' => $request ]);
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
