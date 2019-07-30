<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([ // create a new user
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'name' => 'Administrator',
            'roles' => 1
        ]);

        User::create([ // create a new user
            'email' => 'instructor@admin.com',
            'password' => Hash::make('instructor123'),
            'name' => 'Instructor',
            'roles' => 2
        ]);

        User::create([ // create a new user
            'email' => 'student@admin.com',
            'password' => Hash::make('student123'),
            'name' => 'Student',
            'roles' => 3
        ]);

        
    }
}
