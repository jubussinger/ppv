<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContadorMatricula;

class ContadorMatriculaController extends Controller
{
    public function update(Request $request)
    {
        if ($request->has('id')) {
            ContadorMatricula::find($request->input('id'))->update($request->all());
            return redirect()->back();
        }
    }
}
