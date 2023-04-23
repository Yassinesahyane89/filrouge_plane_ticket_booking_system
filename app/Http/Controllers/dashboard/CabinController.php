<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
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
