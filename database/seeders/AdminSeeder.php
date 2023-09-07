<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an Admin user
        Admin::create([
            'name' => 'Admin User',
            'email' => 'Admin@devbunch.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
