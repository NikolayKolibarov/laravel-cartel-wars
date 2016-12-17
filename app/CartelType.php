<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartelType extends Model
{
    public function cartel()
    {
        return $this->hasMany('App\Cartel');
    }

    public function resourceBuildings()
    {
        return $this->hasMany('App\ResourceBuilding');
    }

    public function armyBuildings()
    {
        return $this->hasMany('App\ArmyBuilding');
    }
}
