<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NotaController extends Controller
{
    public function store(Request $request)
    {
        $nucleoId = Auth::id();
        $request->validate([/*validation rules*/]);
        
        $nota = Nota::create([
            'data' => $request->data,
            'nota'  => $request->nota,
            'aluno_id' => $request->aluno,
            'profissional_id' => $request->profissional,            
            'nucleo_id' => $nucleoId
        ]);
                
        return redirect()->back();
    }
}
