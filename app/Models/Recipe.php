<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
        return collect(File::files(resource_path("recipes/")))
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
