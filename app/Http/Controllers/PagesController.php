<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class PagesController extends Controller
{
    public function index()
    {
        $recipe = Recipe::find(10);

        $recipe1 = Recipe::find(11);
        $recipe2 = Recipe::find(12);
        $recipe3 = Recipe::find(13);
        $recipe4 = Recipe::find(14);

        return view(
            'pages.index',
            [
                'recipe' => $recipe,
                'recipe1' => $recipe1,
                'recipe2' => $recipe2,
                'recipe3' => $recipe3,
                'recipe4' => $recipe4
            ]
        );
    }
}
