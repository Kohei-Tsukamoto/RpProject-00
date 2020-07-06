<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $guarded = ['recipe_id'];

    //protected $table = 'recipies_table';


    // public function amounts()
    // {
    //     return $this->hasMany('App\Amount');
    // }

    public function users()
    {
        return $this->belongsTo('App\User');
    }


    //中間テーブルのリレーション
    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'amounts')->withPivot('amount');
    }


    public function schedules()
    {
        return $this->belongsToMany('App\Schedule', 'schedules_has_recipes');
    }


    public function processes()
    {
        return $this->hasMany('App\Process');
    }
}
