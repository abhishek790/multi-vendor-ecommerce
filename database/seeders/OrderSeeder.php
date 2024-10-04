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
        $users = User::where('role', 'buyer')->get();


        foreach ($users as $user) {
            $numOfIterations = random_int(1, 3);

            for ($i = 0; $i < $numOfIterations; $i++) {

                Order::factory()->create([
                    'user_id' => $user->id

                ]);
            }
        }


    }
}
