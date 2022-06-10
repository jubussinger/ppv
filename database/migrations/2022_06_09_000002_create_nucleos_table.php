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
        Schema::create('nucleos', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique();
            $table->string('senha');
            $table->string('municipio');
            $table->string('bairro');
            $table->string('estado');
            $table->string('parlamentar');
            $table->string('emenda');
            $table->string('responsavel');
            $table->string('whatsapp');
            $table->string('endereco');
            $table->date('inauguracao');
            //$table->tinyInteger('status')->default('1');
            /*$table->unsignedBigInteger('coordenador_id');
            $table->unsignedBigInteger('professor_id');
            $table->unsignedBigInteger('tecnico_administrativo_id');
            $table->unsignedBigInteger('auxiliar_tecnico_id');
            $table->foreign('coordenador_id')->references('id')->on('profissionals');
            $table->foreign('professor_id')->references('id')->on('profissionals');
            $table->foreign('tecnico_administrativo_id')->references('id')->on('profissionals');
            $table->foreign('auxiliar_tecnico_id')->references('id')->on('profissionals');*/
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
        Schema::dropIfExists('nucleos');
    }
};
