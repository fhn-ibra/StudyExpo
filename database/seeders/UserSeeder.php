<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'level' => 'admin',
            ], [
                'name' => 'Guru',
                'email' => 'guru@gmail.com',
                'password' => bcrypt('guru'),
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
