<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filmes;

class FormController extends Controller
{
    // Exibição de Lista de Todos os Filmes
    public function exibirFilmes (Request $request){
        $filmes = Filmes::all();
        return view('todosFilmes')->with('filmes', $filmes);
    }

    // Exibição do Formulário de Cadastro de Novo Filme
    public function adicionarFilme (){
        return view('/adicionarFilme');
    }

    // Validação e Cadastro do Novo Filme
    public function cadastrarFilme ( Request $request){
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
            return view('adicionarFilme')->with('sucesso',true);
        } else {
            return view('adicionarFilme')->with('ocorreuErro',true);
        }
    }

    // Visualização para Edição
    public function editarFilme($id){
        $filme = Filmes::find($id);
        return view('editarFilme')->with('filme', $filme);
    }

    // Ação para Edição/Atualização
    public function atualizarFilme (Request $request, $id){
        $filme = Filmes::find($id);
        $filme->title = $request->input('title');
        $filme->rating = $request->input('rating');
        $filme->awards = $request->input('awards');
        $filme->length = $request->input('length');
        $filme->release_date = $request->input('release_date');
        $sucesso = $filme->save();
        if($sucesso){
            return view('/filmes')->with('sucesso',true);
        } else {
            return view('EditarFilme')->with('ocorreuErro',true);
        }
    }

    // Visualização para Exclusão
    public function excluirFilmes (Request $request){
        $filmes = Filmes::all();
        return view('filmes/delete')->with('filmes', $filmes);
    }

    public function deletarFilme (Request $request, $id){
        $filme = Filmes::find($id);
        $filme->title = $request->input('title');
        $filme->rating = $request->input('rating');
        $filme->awards = $request->input('awards');
        $filme->length = $request->input('length');
        $filme->release_date = $request->input('release_date');
        $sucesso = $filme->delete();
        if($sucesso){
            return view('/filmes')->with('sucesso',true);
        } else {
            return view('/filmes')->with('ocorreuErro',true);
        }
    }
}
