<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\teacherPicket;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teacherPicket>
 */
class teacherPicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = teacherPicket::class;

    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name,
            'section' => $this->faker->word
        ];
    }
}
