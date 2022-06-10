<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    function aluno(){
        return $this->belongsTo(Aluno::class);
    }

    function nucleo(){
        return $this->belongsTo(User::class);
    }

    function turma(){
        return $this->belongsTo(Turma::class);
    }

    function profissional(){
        return $this->belongsTo(Profissional::class);
    }
}
