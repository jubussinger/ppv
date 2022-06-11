<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function turma(){
        $alunos = Aluno::where('status', 1);

        return Inertia::render('CadastroTurma', ['alunos' => $alunos]);

    }
}
