<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartel extends Model
{
    public function game()
    {
        return $this->hasOne('App\Game');
    }
}
