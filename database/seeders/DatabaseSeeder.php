<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
use Database\Factories\IdeaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Category::factory()->create(['name'=> 'Category 1']);
        Category::factory()->create(['name'=> 'Category 2']);
        Category::factory()->create(['name'=> 'Category 3']);
        Category::factory()->create(['name'=> 'Category 4']);
        // \App\Models\User::factory(10)->create();
        Idea::factory(30)->create();


    }
}
