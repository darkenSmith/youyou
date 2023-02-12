<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use MongoDB\BSON\Binary;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_name' => fake()->name,
            'last_name' => fake()->lastName,
            'first_name' => fake()->firstName,
            'bio' => fake()->text,
        ];
    }

    public function user(string $id)
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $id,
        ]);
    }

    public function displayPic(Binary $image)
    {
        return $this->state(fn (array $attributes) => [
            'display_pic' => $image,
        ]);
    }

}
