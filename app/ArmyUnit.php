<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArmyUnit extends Model
{
    public function armyBuilding()
    {
        return $this->belongsTo('App\ArmyBuilding');
    }
}
