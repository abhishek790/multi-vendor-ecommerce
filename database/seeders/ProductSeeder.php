<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $sellers = User::where('role', 'seller')->get();

        Product::factory()->count(50)->create([
            'user_id' => $sellers->random()->id,
            'category_id' => $categories->random()->id
        ]);

    }
}