<?php

namespace App\Http\Controllers;

use App\Models\Seat;

class SeatController extends Controller
{
    public function index()
    {
        return view('content.seat.table');
    }

    public function create()
    {
        return view('content.seat.form', [
            'seat' => new Seat(),
        ]);
    }

    public function edit($id)
    {
        $seat = Seat::find($id);

        return view('content.seat.form', [
            'seat' => $seat,
        ]);
    }
}
