<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2021-01-11 19:26:27',
                'password' => '$2y$10$4LF8Y0zDXSmvRnMOVF.JLeGkhXSmW2MSi//4QJPAcfOWknsq1RCZC',
                'roles' => 'ADMIN'
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'email_verified_at' => '2021-01-11 19:26:27',
                'password' => '$2y$10$Y1x6EMYYWgbwzAJmLS5YTuDDZG.Gmr28e.KF0wM4rAYuz3L2K9w2W',
                'roles' => 'USER'
            ]
        ];

        foreach ($users as $user) {
            \App\User::create($user);
        }
    }
}
