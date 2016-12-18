<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartel extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cartelType()
    {
        return $this->belongsTo('App\CartelType');
    }

    public function cartelResourceBuildings()
    {
        return $this->hasMany('App\CartelResourceBuilding');
    }

    public function cartelArmyBuildings()
    {
        return $this->hasMany('App\CartelArmyBuilding');
    }

    public function cartelResources()
    {
        return $this->hasMany('App\CartelResource');
    }

    public function cartelArmyUnits()
    {
        return $this->hasMany('App\CartelArmyUnit');
    }
}
