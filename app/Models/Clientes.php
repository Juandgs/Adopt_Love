<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clientes extends Model
{
    protected $table = 'clientes';

    protected $fillable = ['persona_id'];

    public function personas():BelongsTo{
        return $this->belongsTo(Personas::class, 'persona_id');
    }

    public function donaciones():HasMany{
        return $this->hasMany(Donaciones::class, 'fk_id_cliente');
    }
    
    public function adopciones():HasMany{
        return $this->hasMany(Adopciones::class, 'fk_id_cliente');
    }

    public function compras():HasMany{
        return $this->hasMany(Compras::class, 'cliente_id');
    }
}
