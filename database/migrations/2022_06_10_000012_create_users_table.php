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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('municipio');
            $table->string('bairro');
            $table->string('estado');
            $table->string('parlamentar')->nullable();
            $table->string('emenda')->nullable();
            $table->string('responsavel');
            $table->string('whatsapp');
            $table->string('endereco');
            $table->date('inauguracao');
            $table->string('name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();            
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
        Schema::dropIfExists('users');
    }
};
