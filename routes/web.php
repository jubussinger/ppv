<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\LancamentoController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\FolhaPontoController;
use App\Http\Controllers\LancamentoImcController;
use App\Http\Controllers\DocumentoCategoriaController;
use App\Http\Controllers\ChamadaController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\CategoriaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Inertia::share('auth.user', function () {
    return Auth::user();
});

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/cadastro/turmas', [CadastroController::class, 'turma'])->name('cadastro_turma_aluno');

    Route::get('/turmas', [TurmaController::class, 'index'])->name('lista_turma');
    Route::post('/turmas', [TurmaController::class,'store'])->name('cadastro_turma');
    Route::get('/turmas/{id}', [TurmaController::class, 'show'])->name('exibir_turma');

    Route::get('/profissionais', [ProfissionalController::class, 'index'])->name('lista_profissional');    
    Route::post('/profissionais', [ProfissionalController::class, 'store'])->name('cadastro_profissional');
    Route::get('/profissionais/{id}', [ProfissionalController::class, 'show'])->name('exibir_profissional');

    Route::get('/professores', [ProfissionalController::class, 'professores'])->name('lista_professores');

    Route::get('/alunos', [AlunoController::class, 'index'])->name('lista_aluno');
    Route::post('/alunos', [AlunoController::class, 'store'])->name('cadastro_aluno');
    Route::put('/alunos', [AlunoController::class,'update'])->name('atualiza_aluno');
    Route::get('/alunos/{id}', [AlunoController::class, 'show'])->name('exibir_aluno');
    Route::get('/alunos/status/{status}', [AlunoController::class, 'indexStatus'])->name('lista_aluno_status');
    Route::get('/alunos/ativar/{id}', [AlunoController::class, 'ativar'])->name('ativar_aluno'); 
    Route::get('/alunos/inativar/{id}', [AlunoController::class, 'inativar'])->name('inativar_aluno');  

    Route::get('/lancamento/aluno/{id}', [LancamentoController::class, 'aluno'])->name('lancamento_aluno');  
    Route::get('/lancamento/professor/{id}', [LancamentoController::class, 'professor'])->name('lancamento_professor'); 
    Route::get('/lancamento/categoria/{id}', [LancamentoController::class, 'categoria'])->name('lancamento_categoria'); 

    //Route::get('/lancamento/notas', [LancamentoController::class, 'nota'])->name('lancamento_nota');
    Route::post('/notas', [NotaController::class, 'store'])->name('cadastro_nota');

    //Route::get('/lancamento/aulas', [LancamentoController::class, 'aula'])->name('lancamento_aula');
    Route::post('/aulas', [AulaController::class, 'store'])-> name('cadastro_aula');

    //Route::get('/lancamento/pontos', [LancamentoController::class, 'ponto'])->name('lancamento_ponto');
    Route::post('/pontos', [FolhaPontoController::class, 'store'])->name('cadastro_ponto');

    //Route::get('/lancamento/imc', [LancamentoController::class, 'imc'])->name('lancamento_imc');
    Route::post('/imc', [LancamentoImcController::class, 'store'])->name('cadastro_imc');

    Route::get('/categorias', [CategoriaController::class, 'index'])->name('lista_categoria');
    //Route::get('/lancamento/documentos', [LancamentoController::class, 'documento'])->name('lancamento_documento');
    Route::post('/categoria/documentos', [DocumentoCategoriaController::class, 'store'])->name('doc_categoria');

    //Route::get('/lancamento/chamadas', [LancamentoController::class, 'chamada'])->name('lancamento_chamada');
    Route::post('/chamadas', [ChamadaController::class, 'store'])->name('cadastro_chamada');

    Route::get('/relatorio/aluno/{id}', [RelatorioController::class, 'aluno'])->name('relatorio_aluno');
    Route::get('/relatorio/acompanhamento', [RelatorioController::class, 'acompanhamento'])->name('relatorio_acompanhamento');
    Route::get('/relatorio/acompanhamento/{id}', [RelatorioController::class, 'acompanhamento_aluno'])->name('relatorio_acompanhamento_aluno');
    Route::get('/relatorio/imc', [RelatorioController::class, 'imc'])->name('relatorio_imc');
    Route::get('/relatorio/nucleo', [RelatorioController::class, 'nucleo'])->name('relatorio_nucleo');
});




require __DIR__.'/auth.php';
