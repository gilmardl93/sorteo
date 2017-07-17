<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Firma extends Model
{
    protected $table = "Comision.firma";

    public function scopeValidar($cadenaSQL, $id)
    {
        return $cadenaSQL->where('id', $id);
    }
}
