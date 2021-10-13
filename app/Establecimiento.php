<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    //
    public function eventos()
    {
        return $this->hasMany('App\Evento');
    }
}
