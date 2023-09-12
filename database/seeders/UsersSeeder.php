<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin user
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'Admin@devbunch.com',
            'password' => Hash::make('12345678'),
            'role' => 'Admin',
        ]);

        // Create Teacher user
        DB::table('users')->insert([
            'name' => 'Teacher User',
            'email' => 'Teacher@devbunch.com',
            'password' => Hash::make('12345678'),
            'role' => 'Teacher',
        ]);

        // Create Student user
        DB::table('users')->insert([
            'name' => 'Student User',
            'email' => 'Student@devbunch.com',
            'password' => Hash::make('12345678'),
            'role' => 'Student',
        ]);
    }
}
