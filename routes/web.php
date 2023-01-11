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

Route::get('/', function () {
    return view('recipes');
});

Route::get('recipes/{recipe}', function ($slug) {
    $path = __DIR__ . "/../resources/recipes/{$slug}.html";

    if (! file_exists($path)) {
        abort(404);
    } else {

        $recipe = file_get_contents($path);
        return view('recipe', [
            'recipe' => $recipe
        ]);
    }
})->where('recipe', '[A-z0-9_\-]+');
