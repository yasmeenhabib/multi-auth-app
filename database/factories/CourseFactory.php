<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
             'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
        ];
    }
}
