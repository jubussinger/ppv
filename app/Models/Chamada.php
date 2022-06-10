<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    use HasFactory;

    function aluno(){
        return $this->belongsTo(Aluno::class);
    }

    function profissional(){
        return $this->belongsTo(Profissional::class);
    }
}
