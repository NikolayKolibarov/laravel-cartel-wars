<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cartel()
    {
        return $this->belongsTo('App\Cartel');
    }
}
