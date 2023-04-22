<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Http\Request;

class BookingDetailController extends Controller
{
  public function index(Request $request)
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
    return view('content.mywebsite.booking-details', ['flight' => $flight, 'numberOfPassengers' => $numberOfPassengers, 'class' => $class, 'price' => $price]);
  }
  public function store(Request $request)
  {
    for ($i = 0; $i < count($request['firstname']); $i++) {
        Passenger::create([
          'first_name' => $request['firstname'][$i],
          'last_name' =>$request['lastname'][$i],
          'phone_number'=> $request['mobileNumber'][$i],
          'email' => $request['email'][$i],
        ]);
    }
  }
}
