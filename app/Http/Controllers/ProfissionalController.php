<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profissional;

class ProfissionalController extends Controller
{
    public function index()
    {
        $id = Auth::id();
    
        $profissionais = Profissional::where('nucleo_id', $id);

        return Inertia::render('', ['profissionais' => $profissionais]);

    }

    public function store(Request $request)
    {

        try {

            //DB::beginTransaction();

            $profissional = Profissional::create($request->profissional);

            //$payload = json_decode($request->user, true);
            
            //DB::commit();  
            //return response()->json();
            return redirect()->back();
            
        }         
        catch (\Exception $e) {
            //DB::rollBack();
            return redirect()->back()->withErrors([
                'store' => 'não foi possível cadastrar profissional'
            ]);
        }
    }
}
