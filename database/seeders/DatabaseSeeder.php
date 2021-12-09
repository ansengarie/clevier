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
            'name' => 'Aji Nuansa Sengarie',
            'username' => 'ansengarie',
            'email' => 'ansengarie@gmail.com',
            'password' => bcrypt('sengarie9')
        ]);

        \App\Models\User::factory(10)->create();

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

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
        Product::factory(10)->create();
    }
}
