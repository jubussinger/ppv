<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoAluno extends Model
{
    use HasFactory;

    function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
