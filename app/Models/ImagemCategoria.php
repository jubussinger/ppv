<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagemCategoria extends Model
{
    use HasFactory;

    function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    function profissional(){
        return $this->belongsTo(Profissional::class);
    }
}
