<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index() {
        return view('recipe/recipes', [
            'recipes' => Recipe::latest()->filter(request(['search', 'category']))->get(),
            'categories'=>Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))
        ]);
    }

    public function show(Recipe $recipe) {
        return view('recipe/recipe', [
            'recipe' => $recipe
        ]);
    }
}
