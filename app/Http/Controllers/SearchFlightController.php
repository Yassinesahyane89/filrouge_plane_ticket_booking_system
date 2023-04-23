<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Cabin;
use Illuminate\Http\Request;

class SearchFlightController extends Controller
{
    public function index(Request $request)
    {
        $airports = Airport::all();
        $class = Cabin::all();
        return view('content.pages.landing-page', ['airports' => $airports, 'classes' => $class]);
    }
}
