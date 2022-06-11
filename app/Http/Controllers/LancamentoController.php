<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LancamentoController extends Controller
{
    public function nota(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }

    public function presenca(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }

    public function ponto(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }

    public function imc(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }

    public function documentos(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }

    public function chamadas(){
        $id = Auth::id();

        $nucleo = User::where('id', $id);

        return $nucleo;

    }
}
