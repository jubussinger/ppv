<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ChamadaController extends Controller
{
    public function store(Request $request)
    {
        $nucleoId = Auth::id();
        $request->validate([/*validation rules*/]);
        
        $aula = Aula::create([
            'data_hora' => $request->data_hora,
            'sucesso'  => $request->sucesso,
            'resultado' => $request->resultado,
            'profissional_id' => $request->profissional,
            'aluno_id' => $request->aluno
        ]);
                
        return redirect()->back();
    }
}
