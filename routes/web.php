<?php

use App\Models\Recipe;
use App\Models\Category;
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

Route::get('/', function () {
    return view('recipes', [
        'recipes' => Recipe::with('category')->get()
    ]);
});

Route::get('recipes/{recipe:slug}', function (Recipe $recipe) {
    return view('recipe', [
        'recipe' => $recipe
    ]);
});

Route::get('category/{category:slug}', function (Category $category) {
    return view('recipes', [
        'recipes' => $category->recipe
    ]);
});
