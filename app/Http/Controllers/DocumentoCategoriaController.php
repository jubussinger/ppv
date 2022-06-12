<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoCategoriaController extends Controller
{
    public function store(Request $request) {
       
        //$nucleoId = Auth::id();
        $request->validate([/*validation rules*/]);

        $documento = DocumentoCategoria::create([
            'data' => $request->data,
            'caminho' => $request->caminho,
            'categoria_id' => $request->categoria
            
        ]);
            
        return redirect()->back();
     }
}
