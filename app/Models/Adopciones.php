<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adopciones extends Model
{
    protected $table = 'adopciones';

    protected $fillable = [
        'fecha',
        'fk_id_cliente',
        'fk_id_animales'
    ];

    public function animales():BelongsTo{
        return $this->belongsTo(Animales::class, 'fk_id_animales');
    }
    public function clientes():BelongsTo{
        return $this->belongsTo(Clientes::class, 'fk_id_cliente');
    }
}
