<?php

namespace App\Http\Controllers;

use App\Http\Requests\PassengerInformationrequest;
use App\Models\Flight;
use Illuminate\Http\Request;

class CoordinatePassenegerController extends Controller
{
  public function index(Request $request, $flight_id)
  {
    $flight = Flight::with(['flightFares' => function ($query) {
      $query->where('cabin_id', request()->class_id);
    }])->find($flight_id);
    return view('content.pages.booking-details', ['flight' => $flight, 'price' => $flight->flightFares[0]->fare]);
  }

  public function storeInformationPassenger(PassengerInformationrequest $request, $flight)
  {
    session('passangers', $request['passengers']);
    return view('content.pages.payment', ['totalprice' => $request['totalprice'], 'price' => $request['price']]);
  }
}
