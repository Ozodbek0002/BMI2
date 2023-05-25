<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahalla;

class MahallaSeeder extends Seeder
{

    public function run(): void
    {
        $mahalla = Mahalla::create([
            'name' => 'Bog`zor',
        ]);

        $mahalla = Mahalla::create([
            'name' => 'Ittivoq',
        ]);




    }
}
