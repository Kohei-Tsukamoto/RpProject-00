<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleHasRecipe extends Model
{
    protected $table = 'schedules_has_recipes';
    protected $guarded = array('id');
}
