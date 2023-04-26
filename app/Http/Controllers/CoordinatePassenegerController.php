<?php

namespace App\Http\Controllers;

use App\Http\Requests\PassengerInformationrequest;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CoordinatePassenegerController extends Controller
{
  public function index(Request $request, $flight_id)
  {
    $flight = Flight::with(['flightFares' => function ($query) {
      $query->where('cabin_id', session('classId'));
    }])->find($flight_id);
    session(['price' => $flight->flightFares[0]->fare, 'flightId' => $flight_id]);
    return view('content.pages.booking-details', ['flight' => $flight, 'price' => $flight->flightFares[0]->fare]);
  }

  public function storeInformationPassenger(Request $request)
  {
    $rules = [
      'passengers.*.firstname' => 'required|string|max:255',
      'passengers.*.lastname' => 'required|string|max:255',
      'passengers.*.phone' => 'required|string|regex:/^\+?\d{10,14}$/',
      'passengers.*.email' => 'required|email',
    ];

    // define custom error messages
    $messages = [
      'passengers.*.firstname.required' => 'Please enter first name for passenger',
      'passengers.*.lastname.required' => 'Please enter last name for passenger',
      'passengers.*.phone.required' => 'Please enter phone number for passenger',
      'passengers.*.phone.regex' => 'Phone number should be a valid format',
      'passengers.*.email.required' => 'Please enter email for passenger',
      'passengers.*.email.email' => 'Email should be a valid format',
    ];

    // run validation
    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
      return redirect()->back()
        ->withErrors($validator)
        ->withInput();
    }
    session(['passengers' => $request->passengers]);
    return redirect()->route('payment.index');
  }
}
