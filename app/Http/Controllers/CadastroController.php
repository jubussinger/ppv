<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function turma(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo->alunos();

    }
}
