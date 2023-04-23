<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\City;

class CityController extends Controller
{
  public function index()
  {
    return view('content.city.table');
  }

  public function create()
  {
    return view('content.city.form', [
      'city' => new City(),
    ]);
  }

  public function edit($id)
  {
    $city = City::find($id);

    return view('content.city.form', [
      'city' => $city,
    ]);
  }
}
