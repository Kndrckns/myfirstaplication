<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = \App\Models\Job::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'company_name' => $this->faker->company(),
            'salary' => '$' . $this->faker->numberBetween(30000, 80000) . ' USD',
        ];
    }
}
