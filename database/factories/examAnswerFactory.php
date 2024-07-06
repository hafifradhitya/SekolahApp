<?php

namespace Database\Factories;

use App\Models\examAnswer;
use App\Models\examQuestion;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\examAnswer>
 */
class examAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = examAnswer::class;

    public function definition(): array
    {
        return [
            //
            'examquestion_id' => examQuestion::factory(),
            'answer' => $this->faker->paragraph,
            'correct' => $this->faker->boolean
        ];
    }
}
