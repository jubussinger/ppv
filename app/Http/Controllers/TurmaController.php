<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;
use Auth;
use Inertia\Inertia;

class TurmaController extends Controller
{
    public function index()
    {
        $id = Auth::id();
    
        $turmas = Turma::where('nucleo_id', $id)->paginate();

        $alunos = Aluno::where('status', '1')
                            ->whereNull('turma_id')->paginate();
        return Inertia::render('TurmaDashboard', ['turmas' => $turmas, 'alunos' => $alunos]);

    }

    public function store(Request $request)
    {
        $nucleoId = Auth::id();
        $request->validate([/*validation rules*/]);
        
        $turma = Turma::create([
            'horario_inicio' => $request->horario_inicio,
            'horario_fim'  => $request->horario_fim,
            'faixa_etaria' => $request->faixa_etaria,
            'nucleo_id' => $nucleoId
        ]);
        
        if ($request->has('alunos')) {

            $alunos = $request->alunos;

            foreach($id as $alunos){
                $aluno = Aluno::where('id', $id);
                $aluno->turma_id = $turma->id;
                $aluno->update();
            }
        }
                    
        return redirect()->back();
        
    }

    public function show($id)
    {
        $turma = Turma::where('id', $id)->paginate(1);
        $alunos = Aluno::where('turma_id', $id)->paginate();

        return Inertia::render('TurmaInformacoes', ['turma' => $turma, 'alunos' => $alunos]);

    }
}
