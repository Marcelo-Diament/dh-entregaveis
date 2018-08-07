<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'length' => 'required|integer',
            'release_date' => ''
        ]);
        return view('form');
    }
}
