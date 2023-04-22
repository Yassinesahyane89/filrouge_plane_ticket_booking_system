<?php

namespace Database\Seeders;

use App\Models\Airport;
use App\Models\Cabin;
use App\Models\Flight;
use App\Models\FlightFare;
use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $airports = Airport::all();
        $airportIds = $airports->pluck('id');

        $plans = Plan::all();
        $planIds = $plans->pluck('id');

        $cabins = Cabin::all();
        $cabinIds = $cabins->pluck('id');

        for ($i = 1; $i <= 10; $i++) {
          $departureDate = now()->addDays($i)->setTime(10, 0);
          $arrivalDate = $departureDate->copy()->addHours(4);

          for ($j = 1; $j <= 5; $j++) {
              $fromAirportId = $airportIds->random();
              $toAirportId = $airportIds->whereNotIn('id', [$fromAirportId])->random();

              $planId = $planIds->random();

              $flight = Flight::create([
                'departure_date' => $departureDate,
                'arrival_date' => $arrivalDate,
                'from_airport_id' => $fromAirportId,
                'to_airport_id' => $toAirportId,
                'plan_id' => $planId,
              ]);

              foreach ($cabinIds as $cabinId) {
                FlightFare::create([
                  'flight_id' => $flight->id,
                  'cabin_id' => $cabinId,
                  'fare' => rand(100, 1000),
                ]);
              }
            }
        }
    }
}
