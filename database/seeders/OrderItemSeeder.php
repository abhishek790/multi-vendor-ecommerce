<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // we need to put the array inside function and return it in order to get unique value for each order
        // if you use the array only inside create() it will run once and for all other iteration it will use that same value
        OrderItem::factory()->count(100)->create(function () {
            return [
                'user_id' => User::inRandomOrder()->where('role', 'buyer')->first()->id,
                'product_id' => Product::inRandomOrder()->first()->id,
                'order_id' => Order::inRandomOrder()->first()->id
            ];
        });
    }
}
