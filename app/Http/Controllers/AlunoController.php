<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
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
                    'error' => "E-mail já cadastrado!"
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
}
