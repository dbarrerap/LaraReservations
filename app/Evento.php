<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = ['Nombre', 'Descripcion', 'Fecha', 'establecimiento_id'];
    //
    public function establecimiento()
    {
        return $this->belongsTo('App\Establecimiento');
    }
}
