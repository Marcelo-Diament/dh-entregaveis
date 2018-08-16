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

}
