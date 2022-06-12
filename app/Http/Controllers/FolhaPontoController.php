<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class FolhaPontoController extends Controller
{
    public function store(Request $request)
    {
        $nucleoId = Auth::id();
        $request->validate([/*validation rules*/]);
        
        $aula = Aula::create([
            'chegada' => $request->chegada,
            'saida'  => $request->saida,
            'falta' => $request->falta,
            'profissional_id' => $request->profissional,         
            'nucleo_id' => $nucleoId
        ]);
                
        return redirect()->back();
    }
}
