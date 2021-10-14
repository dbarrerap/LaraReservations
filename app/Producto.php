<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['SKU', 'Nombre', 'Descripcion', 'Costo', 'Precio', 'PagaIVA', 'proveedor_id'];
    //
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }
}
