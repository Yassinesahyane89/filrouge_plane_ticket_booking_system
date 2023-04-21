<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $morocco = Country::where('name', 'Morocco')->first();

        $data = [
          ['name' => 'Casablanca', 'country_id' => $morocco->id],
          ['name' => 'Agadir', 'country_id' => $morocco->id],
          ['name' => 'Marrakech', 'country_id' => $morocco->id],
          ['name' => 'Tangier', 'country_id' => $morocco->id],
        ];

        City::insert($data);
    }
}
