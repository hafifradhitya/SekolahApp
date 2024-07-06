<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Faker\CustomFakerProvider;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Teacher::class;

    public function definition(): array
    {

        $this->faker->addProvider(new CustomFakerProvider($this->faker));

        return [
            'name' => $this->faker->name,
            'picture' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'nip' => $this->faker->numerify('################'),
            'gender' => $this->faker->randomElement(['P', 'L']),
            'birth_place' => $this->faker->city, // Menghasilkan nama kota secara acak
            'birth_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'), // Menghasilkan tanggal lahir acak
            'number' => $this->faker->indonesianPhoneNumber(),
            // 'email' => $this->faker->unique()->safeEmail,
            'degree' => $this->faker->randomElement(['S.Pd', 'M.Pd', 'Dr.']),
            'teach' => $this->faker->word,
            // 'password' => Hash::make("12345678"),
            // 'role_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
