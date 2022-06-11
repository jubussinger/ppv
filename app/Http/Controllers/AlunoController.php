<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $id = Auth::id();
    
        $turmas = Turma::where('nucleo_id', $id);
        foreach ($turma as $turmas) {
            $turmaIds[] = $turma->id;
          }

        $alunos = Aluno::whereIn('turma_id', $turmaIds);

        return Inertia::render('', ['alunos' => $alunos]);

    }

    public function show($id)
    {
        $alunos = Aluno::findOrFailnd($id);
        //$lessons = course::findOrFail($id)->lesson;
        return Inertia::render('', ['alunos' => $alunos]);
    
    }

    public function store(Request $request)
    {

        try {

            DB::beginTransaction();
            
            $aluno = Aluno::create($payload);
            if ($request->hasFile('documento')) {

                $path = "public/usuario/{$usuario->id}";

                $stored = $request->documento->store($path);

                $usuario->certidao = str_replace("public", "storage", $stored);

                $usuario->update();
            }

            DB::commit();
                        
            return response()->json();
            
        } 
        catch (\Illuminate\Database\QueryException $e){

            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return response()->json([
                    'error' => "Login já cadastrado!"
                ], 500);
            }
            throw $e;
        }
        catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => "Falha ao efetuar o cadastro",
                'msg' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request)
    {
        if ($request->has('id')) {
            Aluno::find($request->input('id'))->update($request->all());
            return redirect()->back();
        }
    }
}
