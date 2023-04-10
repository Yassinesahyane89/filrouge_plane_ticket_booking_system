<?php

namespace App\Http\Controllers;

use App\Models\Cabin;

class CabinController extends Controller
{
  public function index()
  {
    return view('content.cabin.table');
  }

  public function create()
  {
    return view('content.cabin.form', [
      'cabin' => new Cabin(),
    ]);
  }

  public function edit($id)
  {
    $cabin = Cabin::find($id);

    return view('content.cabin.form', [
      'cabin' => $cabin,
    ]);
  }
}
