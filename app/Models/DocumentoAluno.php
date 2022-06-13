<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoAluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'caminho',
        'aluno_id',
    ];

    function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
