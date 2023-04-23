<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Passenger;

class PassengerController extends Controller
{
    public function index()
    {
        return view('content.passenger.table');
    }

    public function create()
    {
        return view('content.passenger.form', [
            'passenger' => new Passenger(),
        ]);
    }

    public function edit($id)
    {
        $passenger = Passenger::find($id);

        return view('content.passenger.form', [
            'passenger' => $passenger,
        ]);
    }
}
