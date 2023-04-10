<?php

namespace App\Http\Controllers;

use App\Models\Airport;

class AirportController extends Controller
{
  public function index()
  {
    return view('content.airport.table');
  }

  public function create()
  {
    return view('content.airport.form', [
      'airport' => new Airport(),
    ]);
  }

  public function edit($id)
  {
    $airport = Airport::find($id);

    return view('content.airport.form', [
      'airport' => $airport,
    ]);
  }
}
