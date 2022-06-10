<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LancamentoImcController extends Controller
{
    public function store(Request $request) {
       
        
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
            'abaixo_peso' => $abaixoPeso,
            'normal' => $normal,
            'sobrepeso' => $sobrepeso,
            'obeso' => $obeso,
            'muito_obeso' => $muitoObeso
        ]);
            

     }
}
