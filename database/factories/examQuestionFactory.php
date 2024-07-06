<?php

namespace Database\Factories;

use App\Models\examQuestion;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\examQuestion>
 */
class examQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = examQuestion::class;

    public function definition(): array
    {
        return [
            //
            'question' => $this->faker->paragraph,
            'subject' => $this->faker->randomElement(['Matematika', 'Fisika', 'Kimia', 'Bahasa Arab', 'Bahasa Inggris', 'Bahasa Indonesia', 'Ppkn', 'PKWU', 'PAI', 'PJOK']),
        ];
    }
}
