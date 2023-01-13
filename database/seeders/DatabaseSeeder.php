<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Recipe::truncate();

        $user = User::factory(10)->create();

        $american = Category::create(
            [
                'name' => 'American',
                'slug' => 'american'
            ]
        );

        $asian = Category::create(
            [
                'name' => 'Asian',
                'slug' => 'asian'
            ]
        );

        $italian = Category::create(
            [
                'name' => 'Italian',
                'slug' => 'italian'
            ]
        );

        Recipe::create(
            [
                'user_id' => 1,
                'category_id' => $asian->id,
                'title' => 'Chicken Coconut Curry',
                'slug' => 'chicken-coconut-curry',
                'excerpt' => 'Easy healthy meal prep option',
                'body' => 'Create curry with cubed chicken, coconut milk, red curry paste, coconut sugar, veggie broth.',
            ]
        );

        Recipe::create(
            [
                'user_id' => 1,
                'category_id' => $american->id,
                'title' => 'Cheeseburger',
                'slug' => 'cheeseburger',
                'excerpt' => 'Nice juicy cheeseburger for all occasians',
                'body' => '1/4 pound of ground beef, chesse, two slices of bread and pickles and lettuce',
            ]
        );


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
