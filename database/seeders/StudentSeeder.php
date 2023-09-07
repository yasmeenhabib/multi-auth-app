<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an Student user
        Student::create([
            'name' => 'Student User',
            'email' => 'Student@devbunch.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
