<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Recipe
{
    public $slug;

    public $title;

    public $excerpt;

    public $date;

    public $body;

    public function __construct($slug, $title, $excerpt, $date, $body)
    {
        $this->slug = $slug;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

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
