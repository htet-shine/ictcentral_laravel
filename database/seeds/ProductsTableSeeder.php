<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
/**
 * Run the database seeds.
 *
 * @return void
 */
  public function run()
  {
    // Create Laptops
    for ($i=1; $i <= 6; $i++) { 
      Product::create([
        'name'        => 'Laptop ' . $i,
        'slug'        => 'laptop_' . $i,
        'details'     => 'Core i' . [3,5,7][array_rand([3,5,7])] . ', ' . [8,16,32][array_rand([8,16,32])] . 'GB Ram, ' . [240,480,960][array_rand([240,480,960])] . 'GB SSD',
        'description' => 'Laptop ' . $i . ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',
        'price'       => rand(1200, 2400),
      ])->categories()->attach(1);
    }

    // adding new category to laptops
    $product = Product::find(1);
    $product->categories()->attach(2);

    // Create Desktops
    for ($i=1; $i <= 6; $i++) { 
      Product::create([
        'name'        => 'Desktop ' . $i,
        'slug'        => 'desktop_' . $i,
        'details'     => 'Core i' . [3,5,7][array_rand([3,5,7])] . ', ' . [16,32,64][array_rand([16,32,64])] . 'GB Ram, ' . [240,480,960][array_rand([240,480,960])] . 'GB SSD',
        'description' => 'Desktop ' . $i . ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',
        'price'       => rand(1200, 2400),
      ])->categories()->attach(2);
    }

    //Create Tablets
    for ($i=1; $i <= 6 ; $i++) { 
      Product::create([
        'name'      	=> 'Tablet ' . $i,
        'slug'      	=> 'tablet_' . $i,
        'details'   	=> 'Snapdragon ' . [835,845,855][array_rand([835,845,855])] . ', ' . [2,3,4][array_rand([2,3,4])] . 'GB Ram, ' . [16,64,128][array_rand([16,64,128])] . 'GB Storage',
        'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',
        'price'				=> rand(500,1000),
      ])->categories()->attach(3);
    }

    //Create Phones
    for ($i=1; $i <= 6 ; $i++) { 
    	Product::create([
    		'name'				=> 'Phone ' . $i,
    		'slug'				=> 'phone_' . $i,
    		'details'			=> 'Snapdragon ' . [835,845,855][array_rand([835,845,855])] . ', ' . [2,3,4][array_rand([2,3,4])] . 'GB Ram, ' . [16,64,128][array_rand([16,64,128])] . 'GB Storage',
    		'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',
    		'price'				=> rand(500,1000),
    	])->categories()->attach(4);
    }

    //Create Accessories
    for ($i=1; $i <= 6 ; $i++) { 
    	Product::create([
    		'name'				=> 'Accessory ' . $i,
    		'slug'				=> 'accessory_' . $i,
    		'details'			=> 'Some accessory details',
    		'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',
    		'price'				=> rand(5,300),
    	])->categories()->attach(5);
    }

    //Create Headphones
    for ($i=1; $i <= 6 ; $i++) { 
    	Product::create([
    		'name'				=> 'Headphone ' . $i,
    		'slug'				=> 'headphone_' . $i,
    		'details'			=> 'Impedance: ' . [16,32,120][array_rand([16,32,120])] . ' ohms, Wired: ' . [1,0][array_rand([1,0])] . ', Wireless: ' . [1,0][array_rand([1,0])],
    		'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',
    		'price'				=> rand(80,500),
    	])->categories()->attach(6);
    }

    // Create Displays
    for ($i=1; $i <= 6 ; $i++) { 
    	Product::create([
    		'name'				=> 'Display ' . $i,
    		'slug'				=> 'display_' . $i,
    		'details'			=> [24,27,32][array_rand([24,27,32])] . ' inches, G-Sync: ' . [1,0][array_rand([1,0])],
    		'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',
    		'price'				=> rand(150, 500),
    	])->categories()->attach(7);
    }



    // Product::create([
    // 	'name'				=> 'Surface Laptop Black',
    // 	'slug'				=> 'laptop_1',
    // 	'details'			=> 'Core i7, 8GB Ram, 240GB SSD',

    // 	'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',

    // 	'price'				=> 1399
    // ]);

    // Product::create([
    // 	'name'				=> 'Surface Laptop Red',
    // 	'slug'				=> 'laptop_2',
    // 	'details'			=> 'Core i5, 8GB Ram, 240GB SSD',

    // 	'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',

    // 	'price'				=> 1199
    // ]);

    // Product::create([
    // 	'name'				=> 'Surface Laptop Teal',
    // 	'slug'				=> 'laptop_3',
    // 	'details'			=> 'Core i5, 8GB Ram, 120GB SSD',

    // 	'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',

    // 	'price'				=> 1100
    // ]);

    // Product::create([
    // 	'name'				=> 'Surface Laptop Gray',
    // 	'slug'				=> 'laptop_4',
    // 	'details'			=> 'Core i7, 8GB Ram, 240GB SSD',

    // 	'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',

    // 	'price'				=> 1399
    // ]);

    // Product::create([
    // 	'name'				=> 'XPS 13',
    // 	'slug'				=> 'laptop_5',
    // 	'details'			=> 'Core i7, 16GB Ram, 240GB SSD',

    // 	'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',

    // 	'price'				=> 1499
    // ]);

    // Product::create([
    // 	'name'				=> 'Zenbook Ultra',
    // 	'slug'				=> 'laptop_6',
    // 	'details'			=> 'Core i5, 8GB Ram, 512GB SSD',

    // 	'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.',

    // 	'price'				=> 1300
    // ]);
  }
}
