<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/',function() {
    return view('index') ;
});*/

Route::get('/', 'PagesController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('recipe/create', 'Admin\RecipeController@add')->name('recipe.create');
    Route::post('recipe/create', 'Admin\RecipeController@create');

    Route::get('user/edit', 'Admin\Usercontroller@edit')->name('user.edit');
    Route::post('user/update', 'Admin\UserController@update');
});

Route::get('recipe/{id}', 'RecipeController@show');
Route::get('recipe_schedule/show', 'ScheduleController@show_schedule');
Route::get('recipe_weeklyschedule/show', 'ScheduleController@show_weeklyschedule');
Route::get('recipes', 'RecipeSearchController@index');
Route::get('all_recipes', 'Recipecontroller@show_all');
Route::get('recipe/favorite/show', 'AllFavoriteController@all_recipe');

Route::get('user/{id}', 'UserController@show');

Route::get('schedule/set', function () {
    return view('pages/recipe_schedule_set');
});
Route::post('schedule_register', 'ScheduleController@make_schedule');

//パスワード変更のルーティング
Route::get('changepassword', 'Admin\UserController@showChangePasswordForm')->name('show.change_password');
Route::post('changepassword', 'Admin\UserController@changePassword')->name('change.password');


//お気に入り登録のルーティング
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'recipes/{id}'], function () {
        Route::post('favorite', 'FavoriteController@store')->name('favorites.favorite');
        Route::delete('unfavorite', 'FavoriteController@destroy')->name('favorites.unfavorite');
    });
});

Auth::routes();
