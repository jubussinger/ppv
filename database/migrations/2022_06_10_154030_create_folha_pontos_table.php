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
        Schema::create('folha_pontos', function (Blueprint $table) {
            $table->id();            
            $table->dateTime('chegada');
            $table->dateTime('saida');
            $table->tinyInteger('falta');
            $table->unsignedBigInteger('nucleo_id');
            $table->unsignedBigInteger('profissional_id');
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
        Schema::dropIfExists('folha_pontos');
    }
};
