<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profissional;
use Auth;
use Inertia\Inertia;

class ProfissionalController extends Controller
{
    public function index()
    {
        $id = Auth::id();
    
        $profissionais = Profissional::where('nucleo_id', $id)->paginate();

        return Inertia::render('ProfissionalDashboard', ['profissionais' => $profissionais]);

    }

    public function professores()
    {
        $id = Auth::id();
    
        $profissionais = Profissional::where([
                ['nucleo_id', $id], ['funcao', 'PROFESSOR']
            ])->paginate();


        return Inertia::render('LancamentoProfessorDashboard', ['profissionais' => $profissionais]);

    }

    public function store(Request $request)
    {
        $nucleoId = Auth::id();
        $request->validate([/*validation rules*/]);
        
        $profissional = Profissional::create([
            'nome' => $request->nome,
            'cpf'  => $request->cpf,
            'endereco' => $request->endereco,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'contato' => $request->contato,
            'observacao' => $request->observacao,
            'funcao' => $request->funcao,
            'status' => '1',
            'nucleo_id' => $nucleoId
        ]);
                
        return redirect()->back();
    }

    public function show($id)
    {
        $profissionais = Profissional::where('id', $id)->paginate();

        return Inertia::render('ProfissionalInformacoes', ['profissional' => $profissionais]);

    }
}
