<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'product_name' => 'Majoo Pro',
                'about' => 'this is our first class product here',
                'slug' => 'majoo-pro',
                'price' => 10000,
                'stock' => 10,
                'image' => '5ffc7d8154e68_standard_repo.png'
            ],
            [
                'product_name' => 'Majoo Advance',
                'about' => 'we create this new product with pride',
                'slug' => 'majoo-advance',
                'price' => 255000,
                'stock' => 50,
                'image' => '5ffc7cc1e14f2_paket-advance.png'
            ],
            [
                'product_name' => 'Majoo Lifestyle',
                'about' => 'we made this for your office best service',
                'slug' => 'majoo-lifestyle',
                'price' => 205000,
                'stock' => 15,
                'image' => '5ffc7d4394d55_paket-lifestyle.png'
            ],
            [
                'product_name' => 'Majoo Desktop',
                'about' => 'you need this product for your daily life',
                'slug' => 'majoo-desktop',
                'price' => 51000,
                'stock' => 30,
                'image' => '5ffc7ceaddf46_paket-desktop.png'
            ]
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
