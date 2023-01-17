<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index() {
        return view('recipes', [
            'recipes' => Recipe::latest()->filter()->get(),
            'categories'=>Category::all()
        ]);
    }

    public function show(Recipe $recipe) {
        return view('recipe', [
            'recipe' => $recipe
        ]);
    }
}
