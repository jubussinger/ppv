<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LancamentoImc;
use Auth;

class LancamentoImcController extends Controller
{
    public function store(Request $request) {
       
        $nucleoId = Auth::id();
        $request->validate([/*validation rules*/]);

        switch($request->imc) {
            case($request->imc < 18.5):
 
                $abaixoPeso = true;
 
                break;
 
            case($request->imc <= 24.9):

                $normal = true;
    
                break;
            case($request->imc <= 29.9):

                $sobrepeso = true;
    
                break;
            case($request->imc <= 39.9):

                $obeso = true;
    
                break;
            case($request->imc > 40):

                $muitoObeso = true;
    
                break;
        }

        $imc = LancamentoImc::create([
            'data' => $request->data,
            'imc' => $request->imc,
            'aluno_id' => $request->aluno,
            'abaixo_peso' => $abaixoPeso,
            'normal' => $normal,
            'sobrepeso' => $sobrepeso,
            'obeso' => $obeso,
            'muito_obeso' => $muitoObeso,
            'nucleo_id' => $nucleoId
        ]);
            
        return redirect()->back();
     }
}
