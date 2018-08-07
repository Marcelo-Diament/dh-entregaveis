<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filmes;

class ActorController extends Controller
{
    public function actors (){
        return view('add');
    }

    public function adicionar (Request $request){
        $this->validate($request, [
            'first_name' => 'required|unique:actors|max:100',
            'last_name' => 'required|max:100',
            'rating' => 'integer|min:0|max:10',
            'favorite_movie_id' => 'integer'
        ]);
        return view('add/salvar', [ 'request' => $request ]);
    }

    public function salvar (Request $request){

        $cadastroAtor = Atores::create($request->all());
        // o request all só se aplica se todos os campos são salvos se houvesse um campo que não pode ser inserido na mesma tabela aí teríamos de fazer o request input a input
        $cadastroAtor->save();
    }

    public function atualizar (Request $request,$id){

        $input =Atores::find($id);
        $input->first_name = $request->input('first_name');
        $input->last_name = $request->input('last_name');
        $input->rating = $request->input('rating');
        $input->favorite_movie_id = $request->input('favorite_movie_id');
        
        $input->save();
    }

    public function deletar (Request $request, $id){

        $input =Atores::find($id);
        $input->delete();
    }
}
