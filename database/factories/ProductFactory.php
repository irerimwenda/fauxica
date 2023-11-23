<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $originalPrice = $this->faker->numberBetween(500, 1500);
        $discountPrice = $originalPrice - ($this->faker->numberBetween(100, 350));
        $newPrice = $originalPrice - $discountPrice;

        return [
            'name' => $this->faker->randomElement(['Sprinter Jacket', 'Leather Bag', 'Denim Jacket', 'Micro Shoes', 'Hanbag', 'Oculus']),
            'img_path' => '/images/product-' . $this->faker->numberBetween(1, 10) . '.jpg',
            'size' => $this->faker->randomElement(['2XL','3XL', '4XL']),
            'original_price' => $originalPrice,
            'discounted_price' => $discountPrice,
            'new_price' => $newPrice
        ];
    }
}
