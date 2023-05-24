<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $village = Village::create([
            'name' => 'Shix',
        ]);

        $village = Village::create([
            'name' => 'Ahdarband',
        ]);
    }
}
