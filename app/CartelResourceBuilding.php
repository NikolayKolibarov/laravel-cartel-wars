<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartelResourceBuilding extends Model
{
    public function cartel()
    {
        return $this->belongsTo('App\Cartel');
    }

    public function resourceBuilding()
    {
        return $this->belongsTo('App\ResourceBuilding');
    }
}
