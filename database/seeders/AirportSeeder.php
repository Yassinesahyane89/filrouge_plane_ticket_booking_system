<?php

namespace Database\Seeders;

use App\Models\Airport;
use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $casablanca = City::where('name', 'Casablanca')->first();
        $agadir = City::where('name', 'Agadir')->first();
        $marrakech = City::where('name', 'Marrakech')->first();
        $tangier = City::where('name', 'Tangier')->first();

        $data = [
          ['name' => 'Mohammed V International Airport', 'city_id' => $casablanca->id],
          ['name' => 'Agadir Almassira Airport', 'city_id' => $agadir->id],
          ['name' => 'Marrakech Menara Airport', 'city_id' => $marrakech->id],
          ['name' => 'Ibn Batouta Airport', 'city_id' => $tangier->id],
        ];

        Airport::insert($data);
    }
}
