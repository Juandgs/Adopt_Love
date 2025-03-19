<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Razas extends Model
{
    protected $table = 'razas';

    protected $fillable = [
        'raza',
        'fk_id_tipoAnimal'
    ];

    public function animales():HasMany{
        return $this->hasMany(Animales::class, 'razas_id');
    }
    public function tipoAnimales():BelongsTo{
        return $this->belongsTo(tipoAnimales::class, 'fk_id_tipoAnimal');
    }
}
