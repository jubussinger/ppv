<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'municipio',
        'bairro',
        'estado',
        'parlamentar',
        'emenda',
        'responsavel',
        'whatsapp',
        'endereco',
        'inauguracao'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function profissionais(){
        return $this->hasMany(Profissional::class);
    }

    function turmas(){
        return $this->hasMany(Aula::class);
    }

    function alunos(){
        return $this->hasMany(Aluno::class);
    }

    function folhas_pontos(){
        return $this->hasMany(FolhaPonto::class);
    }

    function aulas(){
        return $this->hasMany(Aula::class);
    }

    function lancamentos_imc(){
        return $this->hasMany(LancamentoImc::class);
    }

    function notas(){
        return $this->hasMany(Nota::class);
    }

}
