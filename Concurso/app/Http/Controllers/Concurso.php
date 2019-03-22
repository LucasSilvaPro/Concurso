<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Concurso extends Controller
{
    public function mostrar(){
    	return view('concursos');
    }
    public function mostrarConcursos(){
    	$concursos=\App\Concurso::all();
    	return view('concursos',compact('concursos'));
    }
    public function mostrarE(\App\Concurso $concursos){
    	return view('paginaE', compact('concursos'));
    }
    public function atualizarC(Request $request, \App\Concurso $concursos){
        $concursos->update($request->all());
        return back();
    }
}
