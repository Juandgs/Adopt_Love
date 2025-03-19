<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class encargadoFund extends Model
{
    protected $table = 'encargado_funds';

    protected $fillable = ['persona_id','fk_id_fundacion'];

    public function personas():BelongsTo{
        return $this->belongsTo(Personas::class, 'persona_id');
    }
    public function fundaciones():BelongsTo{
        return $this->belongsTo(Fundacion::class, 'persona_id');
    }
}
