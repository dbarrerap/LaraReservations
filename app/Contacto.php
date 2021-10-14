<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = ['Nombres', 'Apellidos', 'Telefono', 'Email'];
    //
    public function contactable()
    {
        return $this->morphTo();
    }
}
