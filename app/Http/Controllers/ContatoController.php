<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){
        // Recebendo e processando os dados
        $dadosDoFormulario = $request->all();

        // Debug: Mostra os dados recebidos
        var_dump($dadosDoFormulario);

        // Passando os dados para a view
        return view('site.contato', ['dadosDoFormulario' => $dadosDoFormulario]);
    }
}
