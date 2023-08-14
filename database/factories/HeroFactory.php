<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'       => fake()->title,
            'sub_title'   => fake()->paragraph(2),
            'button_text' => 'Buton',
            'button_url'  => fake()->url,
            'image'       => fake()->imageUrl
        ];
    }
}
