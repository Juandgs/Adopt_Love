<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Compras extends Model
{
    protected $table = 'compras';

    protected $fillable = [
        'total',
        'cliente_id',
        'fecha'
    ];

    public function productosComprados():HasMany{
        return $this->hasMany(productosComprados::class, 'fk_id_cliente');
    }

    public function clientes():BelongsTo{
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }
}
