<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightlistRequest;
use App\Models\Flight;
use App\Models\Plan;
use App\Models\Ticket;
use Illuminate\Http\Request;

class flightlistController extends Controller
{
  public function index(Request $request)
  {
     $flights = Flight::where('from_airport_id', $request['departureAirport'])
            ->where('to_airport_id', $request['arrivalAirport'])
            ->whereDate('departure_date', '=', $request['departureDate'])
            ->get();
      $classId = $request->class;
      $numberOfPassengers = $request->numberPassenger;

    // $flights = Flight::query();

    // if ($request->has('departureAirport')) {
    //   $flights->where('from_airport_id', $request->departureAirport);
    //   // dd($flights->get());
    // }

    // // dd(count($flights->get()));

    // // if ($request->has('arrivalAirport')) {
    // //   $flights->where('to_airport_id', $request->arrivalAirport);
    // // }

    // // if ($request->has('departureDate')) {
    // //   $flights->whereDate('departure_date', '=', $request->departureDate);
    // // }

    // $flights->get();


    $flightIds = $this->getAvailableFlightIds($flights, $classId, $numberOfPassengers);
    $flights = $flights->whereIn('id', $flightIds);

    return view('content.mywebsite.booking-list', [
      'flights' => $flights,
      'numberOfPassengers' => $numberOfPassengers,
      'classId' => $classId,
    ]);
  }


  private function getAvailableFlightIds($flights, $classId, $numberOfPassengers)
  {
    $flightIds = [];

    foreach ($flights as $flight) {
      $availableSeats = $flight->Plan->seats()->where('cabin_id', $classId)->first()->quantity -
        Ticket::where('flight_id', $flight->id)->where('seat_id', $classId)->count();
      if ($availableSeats >= $numberOfPassengers) {
        $flightIds[] = $flight->id;
      }
    }

    return $flightIds;
  }

}
