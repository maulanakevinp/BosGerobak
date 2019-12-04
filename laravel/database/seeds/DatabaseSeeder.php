<?php

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
        $this->call([
            BrandsTableSeeder::class,
            CategoriesTableSeeder::class,
            ContactsTableSeeder::class,
            ProductsTableSeeder::class,
            ImagesTableSeeder::class,
            SlidersTableSeeder::class,
            TestimonialsTableSeeder::class,
            UsersTableSeeder::class,
            UtilitiesTableSeeder::class,
        ]);
    }
}
