<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aluno;
use App\Models\Profissional;
use App\Models\Turma;
use App\Models\Categoria;
use App\Models\Nota;
use App\Models\Chamada;
use App\Models\Aula;
use App\Models\LancamentoImc;
use App\Models\FolhaPonto;
use App\Models\DocumentoCategoria;
use Inertia\Inertia;

class LancamentoController extends Controller
{
    public function aluno($id){
        
        $nucleo = Auth::id();
    
        $profissionais = Profissional::where([
                ['nucleo_id', $nucleo], ['funcao', 'PROFESSOR']
            ])->paginate();

        $aluno = Aluno::where('id', $id)->paginate();
        
        $notas = Nota::where('aluno_id', $id)->paginate();

        $chamadas = Chamada::where('aluno_id', $id)->paginate();

        $aulas = Aula::where('aluno_id', $id)->paginate();

        $imc = LancamentoImc::where('aluno_id', $id)->paginate();

        //$lessons = course::findOrFail($id)->lesson;
        return Inertia::render('LancamentoAluno', 
                                ['aluno' => $aluno, 'profissionais' => $profissionais, 
                                'aulas' => $aulas, 'lancamentosImc' => $imc, 
                                'notas' => $notas, 'chamadas' => $chamadas,
                            ]);        
    }

    public function professor($id){
                
        $profissionais = Profissional::where('id', $id)->paginate();

        $folha_ponto = FolhaPonto::where('professor_id', $id)->paginate();

        return Inertia::render('LancamentoProfessor', 
                                ['profissional' => $profissionais, 
                                'folha_pontos' => $folha_ponto,
                            ]);        
    }

    public function categoria($id){
                
        $categoria = Categoria::where('id', $id)->paginate();

        $documentos = DocumentoCategoria::where('categoria_id', $id)->paginate();

        return Inertia::render('LancamentoCategoria', 
                                ['categoria' => $categoria, 
                                'documentos' => $documentos,
                            ]);        
    }
    
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
