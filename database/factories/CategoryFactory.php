<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class CategoryFactory extends Factory
{

    protected $model = Category::class;

    public function definition(): array
    {

        $category = [
            'Phones',
            'Computers',
            'Accessories',
            'Home Appliances',
            'Gaming',
            'Wearables',
            'Audio',
            'Cameras',
            'Networking',
        ];

        return [
            'name' => $this->faker->randomElement($category),
        ];
    }
}
