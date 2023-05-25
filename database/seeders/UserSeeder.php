<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin001'),
            'phone' => '912770919',
            'role_id' => 1,
            'mahalla_id' => 1,
            ]);

        $user = User::create([
            'name' => 'Mahalla1',
            'email' => 'mahalla1@gmail.com',
            'password' => Hash::make('mahalla001'),
            'phone' => '912770919',
            'role_id' => 2,
            'mahalla_id' => 2,
            ]);

          $user = User::create([
            'name' => 'Mahalla2',
            'email' => 'mahalla2@gmail.com',
            'password' => Hash::make('mahalla001'),
            'phone' => '912770919',
            'role_id' => 2,
            'mahalla_id' => 3,
            ]);




    }
}
