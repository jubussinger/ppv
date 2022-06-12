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
        Schema::create('chamadas', function (Blueprint $table) {
            $table->id();
            $table->datetime('data_hora');
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('profissional_id');
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('profissional_id')->references('id')->on('profissionals');
            $table->tinyInteger('sucesso')->default('0');
            $table->string('resultado');
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
        Schema::dropIfExists('chamadas');
    }
};
