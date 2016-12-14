<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Level;

class Ring extends Model
{
    public function levels()
    {
        return $this->hasMany('App\Level');
    }
}
