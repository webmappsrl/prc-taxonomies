<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PoiType>
 */
class PoiTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'identifier' => $this->faker->unique()->word(),
            'name' => [
                'it' => $this->faker->name(),
                'en' => $this->faker->name(),
                'de' => $this->faker->name(),
                'fr' => $this->faker->name(),
                'es' => $this->faker->name(),
            ],
            'description' => [
                'it' => $this->faker->text(30),
                'en' => $this->faker->text(30),
                'de' => $this->faker->text(30),
                'fr' => $this->faker->text(30),
                'es' => $this->faker->text(30),
            ],
        ];
    }
}
