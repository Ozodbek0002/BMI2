<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rool = Role::create([
            'name' => 'Admin',
        ]);

        $rool = Role::create([
            'name' => 'Mahalla raisi',
        ]);

    }
}
