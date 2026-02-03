<?php

namespace Database\Factories;

use Faker\Factory as Faker;

class TaskFactory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();

        return [
            // 'name' => $faker->name(),
            // 'email' => $faker->unique()->safeEmail(),
        ];
    }
}