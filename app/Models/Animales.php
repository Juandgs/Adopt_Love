<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animales extends Model
{
    protected $table = 'animales';

    protected $fillable = [
        'nombre',
        'edad',
        'fundacion_id',
        'razas_id'
    ];

    public function razas():BelongsTo{
        return $this->belongsTo(Razas::class, 'razas_id');
    }

    public function adopciones():HasMany{
        return $this->hasMany(Adopciones::class, 'fk_id_animales');
    }

    public function fundacion():BelongsTo{
        return $this->belongsTo(Fundacion::class, 'fundacion_id');
    }
}
