<?php

namespace Database\Factories;

use App\Models\teacherAttendance;
use App\Models\Teacher;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teacherAttendance>
 */
class teacherAttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = teacherAttendance::class;

    public function definition(): array
    {
        return [
            //
            'teacher_id' => Teacher::factory(),
            'entry_time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'exit_time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
        ];
    }
}
