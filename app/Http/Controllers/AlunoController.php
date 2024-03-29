<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\DocumentoAluno;
use App\Models\Turma;
use App\Models\ContadorMatricula;
use Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class AlunoController extends Controller
{
    public function index()
    {
        $id = Auth::id();
    
        $turmaIds = array();        

        $turmaIds = Turma::select('id')->where('nucleo_id', $id)->get()->toArray();
          
        $alunos = Aluno::whereIn('turma_id', $turmaIds)->paginate();

        return Inertia::render('LancamentoAlunoDashboard', ['alunos' => $alunos]);

    }

    public function indexStatus($status)
    {
        /*$id = Auth::id();
        $turmaIds = array();
        $turmas = Turma::where('nucleo_id', $id);
        foreach ($turmas as $turma) {
            $turmaIds = $turmaIds->push($turma->id);
          }*/
          
        if($status == 0){
            $desc_status = "INATIVOS";
        }
        else if($status == 1){
            $desc_status = "ATIVOS";
        }
        else{
            $desc_status = "AGUARDANDO DOCUMENTOS";
        }
        $alunos = Aluno::where('status', $status)->with('documentos')->paginate();

        //dd($desc_status);

        return Inertia::render('AlunoDashboard', ['alunos' => $alunos, 'status_filtro' => $desc_status]);

    }

    public function show($id)
    {
        $aluno = Aluno::where('id', $id)->paginate();
        $documentos = DocumentoAluno::where('aluno_id', $id)->paginate();
        //$lessons = course::findOrFail($id)->lesson;
        return Inertia::render('AlunoInformacoes', ['aluno' => $aluno, 'documentos' => $documentos]);
    
    }

    public function store(Request $request)
    {

        //try {

            
            $request->validate([/*validation rules*/]);
            
              $aluno = Aluno::create([
                'nome' => $request->nome,
                'sexo' => $request->sexo,
                'rg' => $request->rg,
                'nascimento' => $request->nascimento,
                'cpf' => $request->cpf,
                'whatsapp' => $request->whatsapp,
                'endereco' => $request->endereco,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'estado' => $request->estado,
                'pai' => $request->pai,
                'mae' => $request->mae,
                'responsavel' => $request->responsavel, 
                'deficiencia' => $request->deficiencia,
                'desc_deficienca' => $request->desc_deficienca,
                'unid_escolar' => $request->unid_escolar,
                'ano_escolar' => $request->ano_escolar,
                'endereco_escolar' => $request->endereco_escolar,
                'bairro_escolar' => $request->bairro_escolar,
                'cidade_escolar' => $request->cidade_escolar,
                'estado_escolar' => $request->estado_escolar,
                'origem_escolar' => $request->origem_escolar,
                'telefone_escolar' => $request->telefone_escolar,
                'status' => '2'
            ]);
            
            if ($request->hasFile('file')) {
                foreach ($request->file as $documento) {
                    $path = "public/documentos/{$aluno->id}";
                    $stored = $documento->store($path);
                    DocumentoAluno::create([
                        'caminho' => str_replace("public", "storage", $stored),
                        'aluno_id' => $aluno->id,
                    ]);
                }
            }

            //DB::commit();
                        
            return redirect('/');
            
        //} 
        /*catch (\Illuminate\Database\QueryException $e){

            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return response()->json([
                    'error' => "Login já cadastrado!"
                ], 500);
            }
            throw $e;
        }
        catch (\Exception $e) {
            //DB::rollBack();
            return response()->json([
                'error' => "Falha ao efetuar o cadastro",
                'msg' => $e->getMessage()
            ], 500);
        }*/
    }

    public function update(Request $request)
    {
        if ($request->has('id')) {
            Aluno::where('id', $request->id)->update($request->all());
            return redirect()->back();
        }
    }

    public function ativar($id)
    {
        $matricula = ContadorMatricula::all()->first();
        $contador_atual = $matricula->contador + 1;
        $qtd_casas = $matricula->qtd_casas;

        $num_matricula = str_pad($contador_atual, $qtd_casas, "0", STR_PAD_LEFT);

        $aluno = Aluno::where('id', $id)
        ->update(['status' => '1', 'matricula' => $num_matricula]);
        
        $matricula_novo = ContadorMatricula::where('id', $matricula->id)
                            ->update(['contador' => $contador_atual]);
        
        return redirect()->back();
        
    }

    public function inativar($id)
    {
        $aluno = Aluno::where('id', $id)
        ->update(['status' => '0']);
        
        return redirect()->back();
    }
}
