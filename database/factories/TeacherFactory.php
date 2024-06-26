<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition(): array
    {
        return [
            'fullName' => $this->faker->name(),
            'image' => $this->faker->imageUrl(640, 480),
            'phone' => $this->faker->phoneNumber(),
            'facebook' => $this->faker->url,
            'twitter' => $this->faker->url,
            'instagram' => $this->faker->url,
        ];
    }
}
