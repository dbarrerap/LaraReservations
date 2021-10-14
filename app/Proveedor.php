<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'proveedores';

    protected $fillable = ['Nombre', 'Direccion', 'RUC'];

    public function contactos()
    {
        return $this->morphMany('App\Contacto', 'contactable');
    }

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
