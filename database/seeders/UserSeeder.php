<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Mas Teknik',
                'email' => 'teknik123@gmail.com',
                'role' => 'Teknik', 
                'password'=> bcrypt('12345'),
            ],
            [
                'name' => 'Mas Petugas',
                'email' => 'petugas123@gmail.com',
                'role' => 'Petugas',
                'password' => bcrypt('12345'),
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
