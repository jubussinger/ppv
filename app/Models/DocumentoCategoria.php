<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoCategoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',        
        'caminho',
        'categoria_id'
    ];

    function categoria(){
        $this->belongsTo(Categoria::class);
    }
}
