<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightlistRequest;
use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Http\Request;

class SearchFlightController extends Controller
{
  public function searchFlight(FlightlistRequest $request)
  {

    $flights = Flight::where('from_airport_id', $request['departureAirport'])
      ->where('to_airport_id', $request['arrivalAirport'])
      ->whereDate('departure_date', '=', $request['departureDate'])
      ->get();
    $classId = $request->class;
    $numberOfPassengers = $request->numberPassenger;

    $flightIds = $this->getAvailableFlightIds($flights, $classId, $numberOfPassengers);
    $flights = $flights->whereIn('id', $flightIds);

    // session(['numberOfPassengers'=>$numberOfPassengers]);
    // session(['classId'=>$classId]);

    return view('content.pages.booking-list', [
      'flights' => $flights,
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
