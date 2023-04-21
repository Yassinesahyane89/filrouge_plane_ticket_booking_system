<?php

namespace Database\Seeders;

use App\Models\Cabin;
use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cabins = Cabin::all();
        $plans = [
          ['number' => 'ABC123'],
          ['number' => 'DEF456'],
          ['number' => 'GHI789'],
        ];

        foreach ($plans as $plan) {
          $plan = Plan::create($plan);

          foreach ($cabins as $cabin) {
            $seatData = [
              'quantity' => 50,
              'cabin_id' => $cabin->id,
            ];

            $seat = $plan->seats()->create($seatData);
          }
        }
    }
}
