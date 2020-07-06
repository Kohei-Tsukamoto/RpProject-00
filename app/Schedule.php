<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = ['schedule_id'];

    //中間テーブルのリレーション
    public function recipes()
    {
        return $this->belongsToMany('App\Recipe', 'schedules_has_recipes');
    }
}
