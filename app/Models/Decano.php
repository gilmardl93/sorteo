<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Decano extends Model
{
    protected $connection = "pgsql_recursos";

    protected $table = "facultad";

    public function scopeActivo($cadenaSQL)
    {
        return $cadenaSQL->where('activo',true);
    }
}
