<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceBuilding extends Model
{
    public function cartelType()
    {
        return $this->belongsTo('App\CartelType');
    }

    public function resource()
    {
        return $this->hasOne('App\Resource');
    }
}
