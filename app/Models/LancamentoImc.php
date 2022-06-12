<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LancamentoImc extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'imc',
        'abaixo_peso',
        'saudavel',
        'sobrepeso',
        'obeso',
        'muito_obeso',
        'aluno_id',
        'nucleo_id'
    ];

    function aluno(){
        return $this->belongsTo(Aluno::class);
    }

    function nucleo(){
        return $this->belongsTo(User::class);
    }
}
