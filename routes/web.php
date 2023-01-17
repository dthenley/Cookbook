<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;
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

Route::get('user/{user:username}', function (User $user) {
    return view('recipes', [
        'recipes' => $user->recipe,
        'categories'=>Category::all()
    ]);
});

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);