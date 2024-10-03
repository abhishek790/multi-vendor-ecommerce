<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop_name' => fake()->company,
            'PAN' => fake()->randomNumber(9),
            'shop_type' => fake()->randomElement([
                'grocery store',
                'clothing store',
                'electronics store',
                'bookstore',
                'pharmacy',
                'hardware store',
            ]),
            'profile_picture' => fake()->imageUrl,


        ];
    }
}
