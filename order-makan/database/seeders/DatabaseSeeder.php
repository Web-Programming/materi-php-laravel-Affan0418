<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@richeese.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'phone' => '081234567890',
            'address' => 'Jl. Ayam Richeese No. 1',
        ]);

        // Customer user
        User::create([
            'name' => 'Customer',
            'email' => 'customer@example.com',
            'password' => bcrypt('password'),
            'role' => 'customer',
            'phone' => '081234567891',
            'address' => 'Jl. Customer No. 1',
        ]);

        // Sample products
        $products = [
            [
                'name' => 'Ayam Goreng Richeese',
                'description' => 'Ayam goreng krispi dengan balutan keju yang lezat',
                'price' => 25000,
                'category' => 'chicken',
                'is_featured' => true,
            ],
            [
                'name' => 'Burger Richeese',
                'description' => 'Burger dengan daging sapi pilihan dan keju yang melimpah',
                'price' => 35000,
                'category' => 'burger',
                'is_featured' => true,
            ],
            [
                'name' => 'Nasi Richeese',
                'description' => 'Nasi putih dengan ayam goreng dan saus keju spesial',
                'price' => 30000,
                'category' => 'rice',
                'is_featured' => false,
            ],
            [
                'name' => 'Es Teh Manis',
                'description' => 'Es teh dengan rasa manis yang menyegarkan',
                'price' => 8000,
                'category' => 'drink',
                'is_featured' => false,
            ],
            [
                'name' => 'Kentang Goreng',
                'description' => 'Kentang goreng krispi dengan bumbu spesial',
                'price' => 15000,
                'category' => 'snack',
                'is_featured' => false,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}