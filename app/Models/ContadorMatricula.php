<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContadorMatricula extends Model
{
    use HasFactory;

    protected $fillable = [
        'contador',
        'qtd_casas'        
    ];
}
