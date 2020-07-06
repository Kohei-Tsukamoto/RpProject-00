<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
    protected $table = 'amounts';
    protected $guarded = array('id');


    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }

    public function recipes()
    {
        return $this->hasMany('App\Recipe');
    }
}
