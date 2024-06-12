<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function create()
    {
        return view('contato');
    }

    public function store(Request $request)
    {
        // Valida os dados
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'sexo' => 'required',
        ]);

        // Salva os dados no banco
        $contato = Contato::create($request->all());

        // Retorna a view com os dados salvos
        return view('contato', ['contato' => $contato]);
    }
}
