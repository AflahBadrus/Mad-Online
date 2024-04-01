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
        $admin = [
            'name' => 'Aflah',
            'email' => 'aflahbadrus1@gmail.com',
            'password' => \bcrypt('aflahbadrus1')
        ];
        User::insert($admin);

        $admin2 = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => \bcrypt('admin1234')
        ];
        User::insert($admin2);

        $admin3 = [
            'name' => 'Sans',
            'email' => 'sans@gmail.com',
            'password' => \bcrypt('sans1234')
        ];
        User::insert($admin3);
    }
}
