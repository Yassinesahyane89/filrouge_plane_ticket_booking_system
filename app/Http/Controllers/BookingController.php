<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightlistRequest;
use App\Http\Requests\PassengerInformationrequest;
use App\Models\Airport;
use App\Models\Cabin;
use App\Models\Flight;
use App\Models\Passenger;
use App\Models\Ticket;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Termwind\Components\Dd;

class BookingController extends Controller
{
  public function index(Request $request)
  {
    $airports = Airport::all();
    $class = Cabin::all();
    return view('content.pages.landing-page', ['airports' => $airports, 'classes' => $class]);
  }

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

    return view('content.pages.booking-list', [
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

  public function bookingdetail(Request $request)
  {
    $flight = $request['flight_id'];
    $numberOfPassengers = $request['numberOfPassengers'];
    $class = $request['classId'];

    $price = Flight::where('id', $flight)
      ->whereHas('flightFares', function ($query) use ($class) {
        $query->where('cabin_id', $class);
      })
      ->firstOrFail()
      ->flightFares[0]['fare'];

    // dd($price);
    return view('content.pages.booking-details', ['flight' => $flight, 'numberOfPassengers' => $numberOfPassengers, 'class' => $class, 'price' => $price]);
  }
  public function storeInformationPassenger(Request $request)
  {
    // dd($request->all());
    // for ($i = 0; $i < count($request['firstname']); $i++) {
    //   Passenger::create([
    //     'first_name' => $request['firstname'][$i],
    //     'last_name' => $request['lastname'][$i],
    //     'phone_number' => $request['phone'][$i],
    //     'email' => $request['email'][$i],
    //   ]);
    // }
    return view('content.pages.payment', ['totaleCost' => $request['totalCost']]);

  }
}
