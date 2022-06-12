<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Auth;

class CadastroController extends Controller
{
    public function turma(){
        $alunos = Aluno::where('status', 1);

        return Inertia::render('CadastroTurma', ['alunos' => $alunos]);

    }
}
