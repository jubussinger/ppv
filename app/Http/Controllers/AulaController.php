<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AulaController extends Controller
{
    public function store(Request $request)
    {
        $nucleoId = Auth::id();
        $request->validate([/*validation rules*/]);
        
        $aula = Aula::create([
            'data' => $request->data,
            'presenca'  => $request->presenca,
            'atestado' => $request->atestado,
            'profissional_id' => $request->profissional,
            'aluno_id' => $request->aluno,
            'turma_id' => $request->turma,             
            'nucleo_id' => $nucleoId
        ]);
                
        return redirect()->back();
    }
}
