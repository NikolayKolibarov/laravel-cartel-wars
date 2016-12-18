<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArmyBuilding extends Model
{
    public function cartelType()
    {
        return $this->belongsTo('App\CartelType');
    }

    public function armyUnits()
    {
        return $this->hasMany('App\ArmyUnit');
    }
}
