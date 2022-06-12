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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->decimal('nota');
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('nucleo_id');
            $table->unsignedBigInteger('profissional_id');
            $table->string('bimestre')->nullable();
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('nucleo_id')->references('id')->on('users');
            $table->foreign('profissional_id')->references('id')->on('profissionals');
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
        Schema::dropIfExists('notas');
    }
};
