<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use DB;


class RecipeSearchController extends Controller
{
    public function index(Request $request)
    {

        $keyword = $request->keyword;

        if (!empty($keyword)) {
            $recipes = DB::table('recipes')
                ->where('recipe_name', 'like', '%' . $keyword . '%')
                ->paginate(4);
        } else {
            $recipes = DB::table('recipes')->paginate(4);
        }

        return view('recipe.index', ['recipes' => $recipes]);
    }
}
