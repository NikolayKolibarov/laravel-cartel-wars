<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartelArmyBuilding extends Model
{
    public function cartel()
    {
        return $this->belongsTo('App\Cartel');
    }

    public function armyBuilding()
    {
        return $this->belongsTo('App\ArmyBuilding');
    }
}
