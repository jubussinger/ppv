<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{
    public function index()
    {
        $id = Auth::id();
    
        $categorias = Categoria::paginate();

        return Inertia::render('LancamentoCategoriaDashboard', ['categorias' => $categorias]);

    }
    
}
