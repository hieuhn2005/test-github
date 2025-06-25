<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ColorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->safeColorName(), // ví dụ: "blue", "red"
        ];
    }
}
