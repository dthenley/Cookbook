<?php

use App\Models\Recipe;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

    $files = File::files(resource_path("recipes/"));

    $recipes = collect($files)
        ->map(function($file) {
            $document = YamlFrontMatter::parseFile($file);

            // These variables are not being assigned to the public variables in the class
            return new Recipe(
                $document->slug,
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
            );
        });


    return view('recipes', [
        'recipes' => $recipes
    ]);
});

Route::get('recipes/{recipe}', function ($slug) {
    return view('recipe', [
        'recipe' => Recipe::find($slug)
    ]);
})->where('recipe', '[A-z0-9_\-]+');
