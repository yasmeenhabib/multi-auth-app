<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an Teacher user
        Teacher::create([
            'name' => 'Teacher User',
            'email' => 'Teacher@devbunch.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
