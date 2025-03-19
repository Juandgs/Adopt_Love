<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class productosComprados extends Model
{
    protected $table = 'productos_comprados';

    protected $fillable = [
        'fk_id_productos',
        'fk_id_cliente',
        'cantidad'
    ];

    public function productos():BelongsTo{
        return $this->belongsTo(Productos::class, 'fk_id_productos');
    }
    public function compras():BelongsTo{
        return $this->belongsTo(Compras::class, 'fk_id_cliente');
    }
}
