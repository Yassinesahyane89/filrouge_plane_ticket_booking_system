<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvailableFlightController extends Controller
{
  public function availableFlight($flights, $numberOfPassengers, $classId)
  {
    dd("ggg");
    return view('content.pages.booking-list', [
      'flights' => $flights,
      'numberOfPassengers' => $numberOfPassengers,
      'classId' => $classId,
    ]);
  }
}
