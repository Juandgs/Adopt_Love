<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Productos extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'precio',
        'cantidad',
        'tipoProducto',
        'imagen',
        'user_id'
    ];

    public function User():BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }

    public function productosComprados():HasMany{
        return $this->hasMany(productosComprados::class, 'fk_id_productos');
    }
}
