<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use \Bezhanov\Faker\ProviderCollectionHelper;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        \App\Models\User::factory(4)->create();

        Category::create([
            'name' => 'Living Room',
            'slug' => 'living-room'
        ]);

        Category::create([
            'name' => 'Kitchen',
            'slug' => 'kitchen'
        ]);

        Category::create([
            'name' => 'Bathroom',
            'slug' => 'bathroom'
        ]);

        Category::create([
            'name' => 'Bedroom',
            'slug' => 'bedroom'
        ]);

        Category::create([
            'name' => 'Family Room',
            'slug' => 'family-room'
        ]);

        Product::factory(20)->create();
    }
}
