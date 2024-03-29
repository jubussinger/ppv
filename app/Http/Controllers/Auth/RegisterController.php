<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],            
            'municipio' => ['required', 'string', 'max:255'],
            'bairro' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string', 'max:2'],
            'responsavel' => ['required', 'string', 'max:255'],
            'whatsapp' => ['required', 'string', 'min:11'],
            'endereco' => ['required', 'string', 'max:255'],
            'inauguracao' => ['required', 'date']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),            
            'municipio'  => $data['municipio'],
            'bairro'  => $data['bairro'],
            'estado'  => $data['estado'],
            'parlamentar'  => $data['parlamentar'],
            'emenda'  => $data['emenda'],
            'responsavel'  => $data['responsavel'],
            'whatsapp'  => $data['whatsapp'],
            'endereco'  => $data['endereco'],
            'inauguracao'  => $data['inauguracao']
        ]);
    }
}
