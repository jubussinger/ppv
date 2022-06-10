<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaSemanaTurma extends Model
{
    use HasFactory;

    function turma(){
        return $this->belongsTo(Turma::class);
    }

    function dia_semana(){
        return $this->belongsTo(DiaSemana::class);
    }
}
