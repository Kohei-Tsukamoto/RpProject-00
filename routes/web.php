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

Route::get('/recipe/schedule', function () {
    return view('pages/schedule');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('recipe/create', 'Admin\RecipeController@add')->name('recipe.create');
    Route::post('recipe/create', 'Admin\RecipeController@create');


    Route::get('user/create', 'Admin\UserController@add');
    Route::get('user/edit', 'Admin\Usercontroller@edit')->name('user.edit');
    Route::post('user/create', 'Admin\UserController@create');
    Route::post('user/update', 'Admin\UserController@update');
    Route::get('user/pass_edit', 'Admin\UserController@');
});

Route::get('changepassword', 'Admin\UserController@showChangePasswordForm')->name('show.change_password');
Route::post('changepassword', 'Admin\UserController@changePassword')->name('change.password');


Route::get('user/{id}', 'UserController@show');
Route::get('recipe/{id}', 'RecipeController@show');

Auth::routes();


Route::get('/recipe', function () {
    return view('admin/recipe/recipe');
});
Route::get('/recipe/create', function () {
    return view('admin/recipe/create');
});

Route::post('/schedule_register', 'ScheduleController@make_schedule');

Route::get('/schedule/set', function () {
    return view('pages/recipe_schedule_set');
});
Route::get('/recipe_schedule/show', 'ScheduleController@show_schedule');



// Route::get('/register', function () {
//     return view('auth/register');
// });