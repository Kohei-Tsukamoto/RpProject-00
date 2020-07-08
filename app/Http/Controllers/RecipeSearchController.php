<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;


class RecipeSearchController extends Controller
{
    public function index(Request $request)
    {

        $keyword = $request->keyword;
        $query = Recipe::query();


        if (!empty($keyword)) {
            $query->where('recipe_name', 'LIKE', "%{$keyword}%");
        }

        $recipes = $query->get();

        return view('recipe.index', ['recipes' => $recipes]);
    }
}
