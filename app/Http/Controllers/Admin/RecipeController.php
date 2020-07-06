<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Ingredient;
use Illuminate\Http\Request;
use App\Recipe;
use App\Amount;
use Auth;
use App\Process;

class RecipeController extends Controller
{
    public function add()
    {
        //Ingredientモデルのインスタンス化
        $ingredient = new Ingredient();
        //データ取得
        $data = $ingredient->getData();

        return view('admin.recipe.create', ['data' => $data]);
    }

    public function create(Request $request)
    {
        //レシピテーブルへ保存：
        $recipe = new Recipe;
        $form = $request->all();

        if (isset($form['recipe_img'])) {
            $path = $request->file('recipe_img')->store('public/img');
            $recipe->recipe_img = basename($path);
        } else {
            $recipe->recipe_img = null;
        }
        unset($form['_token']);
        unset($form['recipe_img']);

        $recipe->recipe_name = $form['recipe_name'];
        $recipe->recipe_comment = $form['recipe_comment'];
        $recipe->user_id = Auth::id();
        $recipe->many_people = $form['many_people'];

        $recipe->save();

        //材料・分量テーブルへ保存：
        for ($i = 0; $i <= /* form/ingredientの配列を数える関数()へ要変更*/ 9; $i++) {
            if (isset($form['ingredient'][$i])) {
                $ingredient = new Ingredient;
                $amount = new Amount;

                //DBの値を参照する
                //form
                $ingredient = Ingredient::where('ingredient', $form['ingredient'][$i])->first();
                $amount->amount = $form['amount'][$i];
                $amount->ingredient_id = $ingredient->id;
                $amount->recipe_id = $recipe->id;

                $amount->save();
            }
        }



        //プロセステーブルへ保存：ループ処理
        //対象プロセスnoかプロセス配列数分
        $count = 0;
        for ($i = 0; $i < 8; $i++) {
            if (isset($form['process'][$i])) {
                $proc = new Process;
                $proc->process = $form['process'][$i];
                //recipe_idと紐付け
                $proc->recipe_id = $recipe->id;

                $proc->process_number = $count + 1;
                $proc->save();
                $count++;
            }
        }


        return redirect('admin/recipe/create');
    }
}
