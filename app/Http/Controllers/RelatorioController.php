<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class RelatorioController extends Controller
{
    public function aluno(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }

    public function acompanhamento(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }

    public function acompanhamento_aluno($id){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }

    public function imc(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }

    public function nucleo(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }

}
