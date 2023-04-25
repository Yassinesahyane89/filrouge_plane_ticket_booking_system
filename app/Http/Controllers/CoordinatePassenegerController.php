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
    return $request->all();
    $passangers = [];
    for ($i = 0; $i < count($request['firstname']); $i++) {
      $passangers[] =  [
        'first_name' => $request['firstname'][$i],
        'last_name' => $request['lastname'][$i],
        'phone_number' => $request['phone'][$i],
        'email' => $request['email'][$i],
      ];
    }

    session('passangers',$passangers);

    return view('content.pages.payment', ['totaleCost' => $request['totalCost']]);
  }
}
