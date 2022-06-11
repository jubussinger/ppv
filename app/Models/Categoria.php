<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    function turmas(){
        return $this->hasMany(Turma::class);
    }

    function imagens(){
        return $this->hasMany(ImagemCategoria::class);
    }

    function alunos(){
        return $this->hasMany(Aluno::class);
    }

    function documentos(){
        return $this->hasMany(DocumentoCategoria::class);
    }

}
