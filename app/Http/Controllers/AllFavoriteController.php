<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Recipe;



class AllFavoriteController extends Controller
{
    public function all_recipe()
    {
        $user = Auth::user();
        $recipes = $user->favorites()->get();

        return view('pages/favorite_recipe', ['recipes' => $recipes]);
    }
}
