<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Define the number of courses you want to create
        $numberOfCourses = 20; // Change this number as needed

        // Use the factory to create and insert random courses
        Course::factory($numberOfCourses)->create();
    }
}
