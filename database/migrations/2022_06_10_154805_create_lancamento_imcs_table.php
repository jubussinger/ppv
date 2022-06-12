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
        Schema::create('lancamento_imcs', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->decimal('imc');
            $table->tinyInteger('abaixo_peso')->default('0');
            $table->tinyInteger('saudavel')->default('0');
            $table->tinyInteger('sobrepeso')->default('0');
            $table->tinyInteger('obeso')->default('0');
            $table->tinyInteger('muito_obeso')->default('0');
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('nucleo_id');
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('nucleo_id')->references('id')->on('users');
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
        Schema::dropIfExists('lancamento_imcs');
    }
};
