<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    public function establecimiento()
    {
        return $this->belongsTo('App\Establecimiento');
    }
}
