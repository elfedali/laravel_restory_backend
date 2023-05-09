<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            //'thumbnail' => $this->faker->imageUrl,
            'is_active' => $this->faker->boolean,
            'position' => $this->faker->numberBetween(0, 100),
            // locale  value en,fr,ar
            'locale' => $this->faker->randomElement(['en', 'fr', 'ar']),

        ];
    }
}
