<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolhaPonto extends Model
{
    use HasFactory;

    protected $fillable = [
        'chegada',
        'saida',
        'falta',
        'profissional_id',            
        'nucleo_id'
    ];

    function nucleo(){
        return $this->belongsTo(User::class);
    }

    function profissional(){
        return $this->belongsTo(Profissional::class);
    }
}
