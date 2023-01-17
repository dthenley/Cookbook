<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters) {
        $query->when( $filters[ 'search' ] ?? false, function($query, $search) {
            $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('title', 'like', '%' . $search . '%');
        });

        $query->when( $filters[ 'category' ] ?? false, function($query, $category) {
            $query
                ->whereExists( fn($query) =>
                    $query->from('categories')
                        ->whereColumn('categories.id', 'recipes.category_id')
                        ->where('categories.slug', $category)
                );
        });

    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
