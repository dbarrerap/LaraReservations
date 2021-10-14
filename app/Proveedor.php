<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'proveedores';

    public function contactos()
    {
        return $this->morphMany('App\Contacto', 'contactable');
    }
}
