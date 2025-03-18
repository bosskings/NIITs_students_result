<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student_detail>
 */
class StudentDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'batch_no' => fake()->numberBetween(10000, 90000),
            'reg_no' => fake()->numberBetween(10000, 90000),
            'course' => fake()->randomElement(['Computer Science', 'Business Administration', 'Engineering', 'Law', 'Medicine']),
            'course_duration' => fake()->numberBetween(1, 5), // Assuming years
            'start_date' => fake()->date(),
            'stop_date' => fake()->date(),
            'passport' => fake()->imageUrl(640, 480, 'people'),
            'signature' => fake()->imageUrl(200, 100, 'abstract'),
            'qr_code' => fake()->imageUrl(200, 200, 'technics'),
        ];
    }
}
