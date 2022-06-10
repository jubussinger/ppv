<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    use HasFactory;

    function nucleos(){
        return $this->belongsTo(User::class);
    }

    function imagensCategoria(){
        return $this->hasMany(ImagemCategoria::class);
    }

    function chamadas(){
        return $this->hasMany(Chamada::class);
    }

    function aulas(){
        return $this->hasMany(Aula::class);
    }

    function notas(){
        return $this->hasMany(Nota::class);
    }

    function lancamentos_imcs(){
        return $this->hasMany(LancamentoImc::class);
    }

    function folhas_pontos(){
        return $this->hasMany(FolhaPonto::class);
    }
    
}
