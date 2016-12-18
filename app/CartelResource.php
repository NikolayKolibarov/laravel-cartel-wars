<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartelResource extends Model
{
    public function cartel()
    {
        return $this->belongsTo('App\Cartel');
    }

    public function resource()
    {
        return $this->belongsTo('App\Resource');
    }

}
