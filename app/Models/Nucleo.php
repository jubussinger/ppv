<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nucleo extends Model
{
    use HasFactory;

    function profissionais(){
        return $this->hasMany(Profissional::class);
    }

    function turmas(){
        return $this->hasMany(Aula::class);
    }

    function alunos(){
        return $this->hasMany(Aluno::class);
    }

    function folhas_pontos(){
        return $this->hasMany(FolhaPonto::class);
    }

    function aulas(){
        return $this->hasMany(Aula::class);
    }

    function lancamentos_imc(){
        return $this->hasMany(LancamentoImc::class);
    }

    function notas(){
        return $this->hasMany(Nota::class);
    }
    
}
