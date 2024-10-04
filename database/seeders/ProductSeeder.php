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

        foreach ($sellers as $seller) {
            $category_post = $categories->random(rand(1, 4));

            foreach ($category_post as $category) {
                Product::factory()->create([
                    'user_id' => $seller->id,
                    'category_id' => $category->id
                ]);

            }
        }



    }
}
