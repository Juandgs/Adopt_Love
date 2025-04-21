<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Personas extends Authenticatable
{
    protected $table = 'personas';

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'correo',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function vendedor():HasOne{
        return $this->hasOne(Vendedores::class, 'persona_id');
    }
    public function Clientes():HasOne{
        return $this->hasOne(Clientes::class, 'persona_id');
    }
    public function encargadoFund():HasOne{
        return $this->hasOne(encargadoFund::class, 'persona_id');
    }
}
