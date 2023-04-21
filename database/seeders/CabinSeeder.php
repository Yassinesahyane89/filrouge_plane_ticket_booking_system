<?php

namespace Database\Seeders;

use App\Models\Cabin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
          ['name' => 'Economy'],
          ['name' => 'Premium Economy'],
          ['name' => 'Business'],
          ['name' => 'First'],
        ];

        Cabin::insert($data);
    }
}
