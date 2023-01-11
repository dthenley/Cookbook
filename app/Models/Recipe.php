<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Recipe
{
    public static function find($slug)
    {
        if (!file_exists($path = resource_path("recipes/{$slug}.html"))) {
             throw new ModelNotFoundException();
        }

        return cache()->remember(
            "recipes.{slug}",
            now()->addHours(4),
            function () use ($path) {
                return file_get_contents($path);
            }
        );

    }
}
