<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employment;
use App\Models\Indicators;
use App\Models\Informations;
use App\Models\Mahalla;
use App\Models\SocialStatus;
use App\Models\Village;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            VillageSeeder::class,
            MahallaSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            InformationsSeeder::class,
            IndicatorsSeeder::class,
            EmploymentSeeder::class,
            SocialStatusSeeder::class,
        ]);
    }
}
