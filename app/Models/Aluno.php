<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    function nucleo(){
        return $this->belongsTo(User::class);
    }

    function turma(){
        return $this->belongsTo(Turma::class);
    }

    function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    function lancamentosimcs(){
        return $this->hasMany(LancamentoImc::class);
    }

    function aulas(){
        return $this->hasMany(Aula::class);
    }

    function notas(){
        return $this->hasMany(Nota::class);
    }

    function chamadas(){
        return $this->hasMany(Chamada::class);
    }
    
    function documentos(){
        return $this->hasMany(DocumentoAluno::class);
    }
}
