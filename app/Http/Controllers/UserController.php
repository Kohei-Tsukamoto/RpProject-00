<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = \App\User::find($request->id);
        $recipes = $user->recipes;

        return view('user/show', ['user' => $user, 'recipes' => $recipes]);
    }
}
