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
    
        $turmas = Turma::where('nucleo_id', $id);

        return Inertia::render('TurmaDashboard', ['turmas' => $turmas]);

    }

    public function store(Request $request)
    {
        $nucleoId = Auth::id();
        $request->validate([/*validation rules*/]);
        
        $turma = Turma::create([
            'horario_inicio' => $request->horario_inicio,
            'horario_fim'  => $request->horario_fim,
            'faixa_etaria' => $request->faixa_etaria,
            'categoria_id' => $request->categoria,
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
}
