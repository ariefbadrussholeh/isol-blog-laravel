<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        
        User::create([
            'name' => 'Arief Badrus Sholeh',
            'username' => 'ariefbadrussholeh',
            'email' => 'arifbadrus08@gmail.com',
            'password' => Hash::make('12345')    
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);

        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);

        Post::factory(20)->create();
    }
}
