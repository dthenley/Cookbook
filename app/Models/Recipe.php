<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters) {
        $query->when( $filters[ 'search' ] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('title', 'like', '%' . $search . '%')
            )
        );

        $query->when( $filters[ 'category' ] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) =>
                $query->where('slug', $category)
            )
        );

    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
