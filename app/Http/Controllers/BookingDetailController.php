<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class BookingDetailController extends Controller
{
  public function index(Request $request)
  {
    $flight = $request['flight_id'];
    $numberPassenger = $request['numberPassenger'];
    $class = $request['class'];

    return view('content.mywebsite.booking-details', ['flight' => $flight, 'numberPassenger' => $numberPassenger, 'class' => $class]);
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
