<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendedores extends Model
{
    protected $table = 'vendedores';

    protected $fillable = [
        'persona_id'
    ];

    public function perosnas():BelongsTo{
        return $this->belongsTo(Personas::class, 'persona_id');
    }
    public function productos():HasMany{
        return $this->hasMany(Productos::class, 'vendedor_id');
    }
}
