<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $categories = ['Clothing', 'Electronics', 'Musical Instrument', 'Furniture'];

        foreach ($categories as $category) {
            Category::create([
                'category_name' => $category,
            ]);
        }

        User::factory(30)->create();

        $this->call(ShopSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(Order::class);
        $this->call(OrderItem::class);


    }
}
