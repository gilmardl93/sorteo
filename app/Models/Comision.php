<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    protected $table = "Comision.comision";

    public function scopeValidos($cadenaSQL)
    {
        return $cadenaSQL->where('proceso','CONCURSO DE ADMISION 2017-2');
    }
}
