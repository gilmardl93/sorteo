<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    protected $connection = "pgsql_admision";

    protected $table = "postulante";

    public function getDatosAttribute()
    {
        return $this->paterno.' '.$this->materno.' '.$this->nombres;
    }

    public function scopeValidos($cadenaSQL)
    {
        return $cadenaSQL->where('codigo','<>','');
    }
    
}