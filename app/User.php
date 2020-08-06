<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function recipes()
    {
        return $this->hasMany('App\Recipe');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }



    public function updateUser($request)
    {
        //protected $guarded = array('id');
        // バリデーションルールを記載
        // public static $rules = array(
        //     'name' => 'required',
        //     'e-mail' => 'email',
        //     'password'
        // )

        $user = self::find($request->user()->id);
        $user->name = $request->name;
        $user->comment = $request->comment;
        $user->profile_img = $request->profile_img;
        $user->update();
    }

    public function favorites()
    {
        return $this->belongsToMany(Recipe::class, 'favorites', 'user_id', 'recipe_id')->withTimestamps();
    }

    public function favorite($recipeId)
    {
        $exist = $this->is_favorite($recipeId);

        if ($exist) {
            return false;
        } else {
            $this->favorites()->attach($recipeId);
            return true;
        }
    }

    public function unfavorite($recipeId)
    {
        $exist = $this->is_favorite($recipeId);

        if ($exist) {
            $this->favorites()->detach($recipeId);
            return true;
        } else {
            return false;
        }
    }

    public function is_favorite($recipeId)
    {
        return $this->favorites()->where('recipe_id', $recipeId)->exists();
    }
}
