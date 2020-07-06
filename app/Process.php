<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table = 'processes';
    protected $guarded = array('id');

    public function recipes()
    {
        return $this->hasMany('App\Recipe');
    }
}
