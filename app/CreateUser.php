<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateUser extends Model
{
    public function recipies()
    {
        return $this->hasMany('App\Recipe');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
}
