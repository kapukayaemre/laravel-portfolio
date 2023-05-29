<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => 'Admin',
            'last_name' => 'Dev',
            'phone' => '0555555555',
            'about' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae aliquam in dolore similique officiis eos dolorum! Molestias officiis vel, expedita numquam blanditiis exercitationem eius temporibus repellendus eum atque animi libero, inventore tempore molestiae et laborum doloremque delectus eveniet tempora suscipit deleniti veritatis hic voluptatibus rem? Reprehenderit excepturi nulla modi possimus.',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
