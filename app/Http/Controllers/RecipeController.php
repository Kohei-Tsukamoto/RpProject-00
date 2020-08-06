<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\User;
use App\Process;



class RecipeController extends Controller
{
    public function show(Request $request)
    {
        $recipe = Recipe::find($request->id);

        $ingredients = $recipe->ingredients()->get();

        //$ingredients = Recipe::find($request->id)->ingredients()->get();

        $user = User::find($recipe->user_id);

        $processes = $recipe->processes;
        //Process::with('recipes')->find($request->id);




        return view('recipe/show', [
            'recipe' => $recipe,
            'ingredients' => $ingredients,
            'user' => $user,
            'processes' => $processes

        ]);
    }


    public function show_all()
    {
        $recipes = Recipe::all();
        return view(
            'recipe.index',
            [
                'recipes' => $recipes
            ]
        );
    }
}
