<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LancamentoImc extends Model
{
    use HasFactory;

    function profissional(){
        return $this->belongsTo(Profissional::class);
    }

    function aluno(){
        return $this->belongsTo(Aluno::class);
    }

    function nucleo(){
        return $this->belongsTo(User::class);
    }
}
