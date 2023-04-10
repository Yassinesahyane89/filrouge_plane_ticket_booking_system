<?php

namespace App\Http\Controllers;

use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        return view('content.flight.table');
    }

    public function create()
    {
        return view('content.flight.form', [
            'flight' => new Flight(),
        ]);
    }

    public function edit($id)
    {
        $flight = Flight::find($id);

        return view('content.flight.form', [
            'flight' => $flight,
        ]);
    }
}
