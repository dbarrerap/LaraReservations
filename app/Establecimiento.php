<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    protected $fillable = ['Nombre', 'Direccion'];
    //
    public function eventos()
    {
        return $this->hasMany('App\Evento');
    }

    public function contactos()
    {
        return $this->morphMany('App\Contacto', 'contactable');
    }
}
