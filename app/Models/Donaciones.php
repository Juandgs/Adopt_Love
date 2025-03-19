<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Donaciones extends Model
{
    protected $table = 'donaciones';

    protected $fillable = [
        'fundacion_id',
        'fecha',
        'cantidad',
        'fk_id_cliente'
    ];

    public function clientes():BelongsTo{
        return $this->belongsTo(Clientes::class, 'fk_id_cliente');
    }
    
    public function fundaciones():BelongsTo{
        return $this->belongsTo(Fundacion::class, 'fundacion_id');
    }
}
