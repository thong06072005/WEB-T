<?php

namespace Database\Factories;

use App\Models\LienHe;
use Illuminate\Database\Eloquent\Factories\Factory;

class LienHeFactory extends Factory
{
    protected $model = LienHe::class;

    public function definition(): array
    {
        return [
            'fullname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'NoiDungGopY' => $this->faker->sentence(20),
        ];
    }
}
