<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function keys()
    {
        return $this->hasMany('App\Key');
    }
}
