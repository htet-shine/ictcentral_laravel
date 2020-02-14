<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    		// Get date and convert it into string
        $now = Carbon::now()->toDateTimeString();

        // insert categories arrays
        Category::insert([
        	['name' => 'Laptops', 'slug' => 'laptops', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Desktops', 'slug' => 'desktops', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Tablets', 'slug' => 'tablets', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Phones', 'slug' => 'phones', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Accessories', 'slug' => 'accessories', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Headphones', 'slug' => 'headphones', 'created_at' => $now, 'updated_at' => $now],
        	['name' => 'Displays', 'slug' => 'displays', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
