<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $fillable = [
        'horario_inicio',
        'horario_fim',
        'faixa_etaria',
        'nucleo_id'
    ];

    function nucleo(){
        return $this->belongsTo(User::class);
    }

    function alunos(){
        return $this->hasMany(Aluno::class);
    }

    function aulas(){
        return $this->hasMany(Aula::class);
    }
    function diasSemanas(){
        return $this->hasMany(DiaSemanaTurma::class);
    }
}
