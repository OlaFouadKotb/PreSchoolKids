<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coursee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coursee>
 */
class CourseeFactory extends Factory
{
    protected $model = Coursee::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_name' => $this->faker->words(3, true),
            'teacherName' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, 10, 500),  // Adjusted range to fit within DECIMAL(8, 2)
            'age' => $this->faker->numberBetween(18, 65),
            'time' => $this->faker->time(),
            'capacity' => $this->faker->numberBetween(10, 50),
            'teacherImage' => $this->faker->imageUrl(640, 480),
        ];
    }
}
