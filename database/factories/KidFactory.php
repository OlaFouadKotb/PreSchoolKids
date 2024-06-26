<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kid>
 */
class KidFactory extends Factory
{
    protected $model = Kid::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'birthday' => $this->faker->dateTimeBetween('-12 years', '-2 years')->format('Y-m-d'),
            'age' => $this->faker->numberBetween(2, 12),
            'active' => $this->faker->boolean(),
            'image' => $this->faker->imageUrl(640, 480),
        ];
    }
}
