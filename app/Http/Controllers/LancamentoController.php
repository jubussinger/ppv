<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aluno;
use App\Models\Profissional;
use App\Models\Turma;
use App\Models\Categoria;

class LancamentoController extends Controller
{
    public function nota(){
        $id = Auth::id();
    
        $turmas = Turma::where('nucleo_id', $id);
        foreach ($turma as $turmas) {
            $turmaIds[] = $turma->id;
          }

        $alunos = Aluno::whereIn('turma_id', $turmaIds);

        $professores = Profissional::where([
                                    ['nucleo_id', $id],
                                    ['funcao', 'PROFESSOR']
                                ]);

        return Inertia::render('', ['alunos' => $alunos, 'professores' => $professores]);

    }

    public function aula(){
        $id = Auth::id();
    
        $turmas = Turma::where('nucleo_id', $id);
        foreach ($turma as $turmas) {
            $turmaIds[] = $turma->id;
          }

        $alunos = Aluno::whereIn('turma_id', $turmaIds);

        $professores = Profissional::where([
                                    ['nucleo_id', $id],
                                    ['funcao', 'PROFESSOR']
                                ]);

        return Inertia::render('', ['alunos' => $alunos, 'professores' => $professores, 'turmas' => $turmas]);


    }

    public function ponto(){
        $id = Auth::id();

        $professores = Profissional::where([
            ['nucleo_id', $id],
            ['funcao', 'PROFESSOR']
        ]);

        return Inertia::render('', ['professores' => $professores]);

    }

    public function imc(){
        $id = Auth::id();
    
        $turmas = Turma::where('nucleo_id', $id);
        foreach ($turma as $turmas) {
            $turmaIds[] = $turma->id;
          }

        $alunos = Aluno::whereIn('turma_id', $turmaIds);

        $professores = Profissional::where([
                                    ['nucleo_id', $id],
                                    ['funcao', 'PROFESSOR']
                                ]);

        return Inertia::render('', ['alunos' => $alunos, 'professores' => $professores]);
    }


    public function chamadas(){
        $id = Auth::id();
    
        $turmas = Turma::where('nucleo_id', $id);
        foreach ($turma as $turmas) {
            $turmaIds[] = $turma->id;
          }

        $alunos = Aluno::whereIn('turma_id', $turmaIds);

        $professores = Profissional::where([
                                    ['nucleo_id', $id],
                                    ['funcao', 'PROFESSOR']
                                ]);

        return Inertia::render('', ['alunos' => $alunos, 'professores' => $professores]);

    }
}
