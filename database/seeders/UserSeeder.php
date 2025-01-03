<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Agus Setiawan',
            'email' => 'agussetiawan@example.com',
            'password' => bcrypt('password'),
            'username' => 'agussetiawan',
        ]);

        User::factory(10)->create();
    }
}
