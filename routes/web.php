<?php

use App\Http\Controllers\RecipeController;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\User;
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

Route::get('/', [RecipeController::class, 'index']);

Route::get('recipes/{recipe:slug}', [RecipeController::class, 'show']);

Route::get('category/{category:slug}', function (Category $category) {
    return view('recipes', [
        'recipes' => $category->recipe,
        'categories'=>Category::all()

    ]);
});

Route::get('user/{user:username}', function (User $user) {
    return view('recipes', [
        'recipes' => $user->recipe,
        'categories'=>Category::all()
    ]);
});

