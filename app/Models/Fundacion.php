<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fundacion extends Model
{
    protected $table = 'fundacions';

    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
        'ciudad',
        'descripcion'
    ];

    public function encargadoFund():HasMany{
        return $this->hasMany(encargadoFund::class, 'fk_id_fundacion');
    }
    public function donaciones():HasMany{
        return $this->hasMany(Donaciones::class, 'fundacion_id');
    }
    public function animales():HasMany{
        return $this->hasMany(Animales::class, 'fundacion_id');
    }
}
