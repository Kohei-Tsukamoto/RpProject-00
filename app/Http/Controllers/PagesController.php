<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class PagesController extends Controller
{
    public function index()
    {

        $recipe = Recipe::find(2);


        return view('pages.index', ['recipe' => $recipe]);
    }
}
