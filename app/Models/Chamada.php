<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_hora',
        'sucesso',
        'resultado',
        'aluno_id',
        'profissional_id'
    ];


    function aluno(){
        return $this->belongsTo(Aluno::class);
    }

    function profissional(){
        return $this->belongsTo(Profissional::class);
    }
}
