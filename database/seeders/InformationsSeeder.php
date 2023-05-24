<?php

namespace Database\Seeders;

use App\Models\Informations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformationsSeeder extends Seeder
{

    public function run(): void
    {
        $information = Informations::create([
            'position'=>'Mahalla Rahbari',
            'full_name'=>'Abdulazizov Abdulaziz',
            'phone'=>'998998998',
            'address'=>'Vatanbarvar ko`cha 1-uy',
            'mahalla_id'=>1,
        ]);



    }
}
