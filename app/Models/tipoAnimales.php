<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tipoAnimales extends Model
{
    protected $table = 'tipo_animales';

    protected $fillable = [
        'tipoAnimal'
    ];

    public function razas():HasMany{
        return $this->hasMany(Razas::class, 'fk_id_tipoAnimal');
    }
}
