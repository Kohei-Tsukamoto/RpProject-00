<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\ScheduleHasRecipe;
use Illuminate\Support\Facades\Auth;


class ScheduleController extends Controller
{
    public function make_schedule(Request $request)
    {
        $schedule = new Schedule;
        $num = preg_replace('/[^0-9]/', '', $request->input('schedule'));
        $schedule->recipe_day = $num;
        $schedule->user_id = Auth::id();
        $schedule->save();



        $shr = new ScheduleHasRecipe;
        $shr->schedule_id = $schedule->id;
        $shr->recipe_id = $request->recipe_id;
        $shr->timestamps = false;
        $shr->save();
        return view('pages/register_success');
    }

    public function show_schedule(Request $request)
    {

        $user = Auth::user();
        $from = $request->from;
        $to = $request->to;

        $schedules = $user->schedules->whereBetween('recipe_day', [$from, $to])->all();

        $recipes = [];
        foreach ($schedules as $schedule) {
            $schedule_recipe = $schedule->recipes()->get();
            foreach ($schedule_recipe as $recipe) {
                $recipes[] = $recipe;
            }
        };


        $ingredients = [];
        $schedule_ingredients = [];
        $how_many = $request->how_many;

        //$schedule_amounts = [];
        foreach ($recipes as $recipe) {
            $ingredients = $recipe->ingredients()->get();
            foreach ($ingredients as $ingredient) {
                //出力したい人数分の分量を計算
                $amount_howmany = round(($ingredient->pivot->amount * $how_many) / $recipe->many_people); //ceil()を使用するか。一人分を出力するときに問題
                if (array_key_exists($ingredient->ingredient, $schedule_ingredients)) {
                    $schedule_ingredients[$ingredient->ingredient] += [$amount_howmany, $ingredient->unit];
                } else {
                    $schedule_ingredients[$ingredient->ingredient] = [$amount_howmany, $ingredient->unit];
                }
            }
        }
        var_dump($schedule_ingredients);
        return view('pages/recipe_schedule', [
            'user' => $user,
            'recipes' => $recipes,
            'schedule_ingredients' => $schedule_ingredients,
            'how_many' => $how_many
        ]);
    }
}
