<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $users = User::all();
        Order::factory()->count(50)->create([
            'user_id' => User::inRandomOrder()->first()->id

        ]);
    }
}
