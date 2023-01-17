<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $with = ['category', 'user'];

    public function scopeFilter($query) {
        if(request('search')) {
            $query
                ->where('title', 'like', '%' .request('search') . '%')
                ->orWhere('title', 'like', '%' .request('search') . '%');
        }

    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
