<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartelArmyUnit extends Model
{
    public function cartel()
    {
        return $this->belongsTo('App\Cartel');
    }

    public function armyUnit()
    {
        return $this->belongsTo('App\ArmyUnit');
    }
}
