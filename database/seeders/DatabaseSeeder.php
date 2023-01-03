<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Devin Febrian',
        //     'username' => 'devinfebrian',
        //     'email' => 'devinfebrian20@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Puma',
            'slug' => 'puma',
        ]);

        Category::create([
            'name' => 'New Balance',
            'slug' => 'new-balance',
        ]);

        Category::create([
            'name' => 'Nike',
            'slug' => 'nike',
        ]);

        Category::create([
            'name' => 'Adidas',
            'slug' => 'adidas',
        ]);
    }
}
