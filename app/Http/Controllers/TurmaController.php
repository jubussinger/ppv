<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class TurmaController extends Controller
{
    public function index()
    {
        $id = Auth::id();
    
        $turmas = Turma::where('nucleo_id', $id);

        return Inertia::render('', ['turmas' => $turmas]);

    }

    public function store(Request $request)
    {

        try {

            //DB::beginTransaction();

            $turma = Turma::create($request->turma);

            //$payload = json_decode($request->user, true);
            if ($request->has('alunos')) {

                $alunos = $request->alunos;

                foreach($id as $alunos){
                    $aluno = Aluno::where('id', $id);
                    $aluno->turma_id = $turma->id;
                    $aluno->update();
                }
            }

            //DB::commit();  
            //return response()->json();
            return redirect()->back();
            
        }         
        catch (\Exception $e) {
            //DB::rollBack();
            return redirect()->back()->withErrors([
                'store' => 'não foi possível cadastrar turma'
            ]);
        }
    }
}
