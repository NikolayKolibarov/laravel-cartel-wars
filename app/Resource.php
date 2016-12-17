<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function resourceBuilding()
    {
        return $this->belongsTo('App\ResourceBuilding');
    }

}
