<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Personas extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'nombre',
        'apellido',
        'contacto',
        'fecha_nacimiento',
        'contraseña'
    ];

    public function vendedores():HasOne{
        return $this->hasOne(Vendedores::class, 'persona_id');
    }
    public function Clientes():HasOne{
        return $this->hasOne(Clientes::class, 'persona_id');
    }
    public function encargadoFund():HasOne{
        return $this->hasOne(encargadoFund::class, 'persona_id');
    }
}
