<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sexo');
            $table->string('rg');
            $table->date('nascimento');
            $table->string('cpf')->unique();
            $table->string('whatsapp');
            $table->string('pai');
            $table->string('mae');
            $table->string('responsavel');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->tinyInteger('deficiencia');
            $table->string('desc_deficienca');
            $table->string('unid_escolar');
            $table->string('ano_escolar');
            $table->string('endereco_escolar');
            $table->string('bairro_escolar');
            $table->string('cidade_escolar');
            $table->string('estado_escolar');
            $table->string('origem_escolar');
            $table->string('telefone_escolar');
            $table->tinyInteger('status');
            $table->string('tam_uniforme');
            $table->string('tam_chuteira');
            $table->string('conhecimento_projeto');
            $table->string('emergencia1');
            $table->string('emergencia2');
            $table->string('matricula');
            $table->unsignedBigInteger('nucleo_id');
            $table->foreign('nucleo_id')->references('id')->on('users'); 
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('turma_id');
            $table->foreign('turma_id')->references('id')->on('turmas');
            $table->date('data_ativo');
            $table->string('caminho_foto');
            $table->decimal('imc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
