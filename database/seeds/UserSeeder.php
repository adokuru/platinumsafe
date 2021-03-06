<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1 = User::create([
            'name' => 'Adminstrator',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'gender' => 'Male',
                'active' => 1,
                'remember_token' => Str::random(10)
        ]);
        $user1->assignRole('Admin');

        $user3 = User::create([
            'name' => 'Test User',
                'email' => 'midone@left4code.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'gender' => 'Female',
                'active' => 1,
                'remember_token' => Str::random(10)
        ]);
        $user3->assignRole('User');

    }
}
