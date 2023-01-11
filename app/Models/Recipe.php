<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Recipe
{
    public static function all()
    {
        $files = File::files(resource_path("recipes/"));

        return array_map(function($file) {
            return $file->getContents();
        }, $files);
    }

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
