<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//「クエリビルダ」を使用するためDBファザードをuseする
use Illuminate\Support\Facades\DB;

class Ingredient extends Model
{

    protected $table = 'ingredients';
    protected $guarded = array('id');

    public $timestamps = false;

    public function getData()
    {
        $data = DB::table($this->table)->get();
        return $data;
    }

    public function recipes()
    {
        return $this->belongsToMany('App\Recipe');
    }






    public function amounts()
    {
        return $this->hasMany('App\Amount');
    }
}
