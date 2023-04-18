<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightlistRequest;
use App\Models\Flight;
use Illuminate\Http\Request;

class flightlistController extends Controller
{
  public function index(FlightlistRequest $request)
  {

    $flights = Flight::where('from_airport_id', $request['departureAirport'])
          ->where('to_airport_id', $request['arrivalAirport'])
          ->whereDate('departureDate', '=', $request['departureDate'])
          ->whereDate('arrivalDate', '=', $request['arrivalDate'])
          ->with(['fromAirport', 'toAirport'])
          ->get();
    return view('content.mywebsite.booking-list', ['flights' => $flights, 'numberPassenger' => $request['numberPassenger'], 'class' => $request['class']]);
  }
}
