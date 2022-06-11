<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoCategoria extends Model
{
    use HasFactory;

    function categoria(){
        $this->belongsTo(Categoria::class);
    }
}
