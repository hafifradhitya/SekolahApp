<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Faker\CustomFakerProvider;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Student::class;


    public function definition(): array
    {

        $this->faker->addProvider(new CustomFakerProvider($this->faker));

        return [
            //
            'name' => $this->faker->name,
            'picture' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'nisn' => $this->faker->unique()->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('12345678'), // Hash password default
            'number' => $this->faker->indonesianPhoneNumber(),
            'gender' => $this->faker->randomElement(['P', 'L']),
            'birth_place' => $this->faker->city, // Menghasilkan nama kota secara acak
            'address' => $this->faker->address,
            'birth_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'), // Menghasilkan tanggal lahir acak
            // 'email' => $this->faker->unique()->safeEmail,
            'class' => $this->faker->randomElement(['X', 'XI', 'XII']),
            'major' => $this->faker->randomElement(['RPL', 'MM', 'TKJ']),
            // 'password' => Hash::make("12345"),
            // 'role_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
