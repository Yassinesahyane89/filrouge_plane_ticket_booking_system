<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        return view('content.country.table');
    }

    public function create()
    {
        return view('content.country.form', [
            'country' => new Country(),
        ]);
    }

    public function edit($id)
    {
        $country = Country::find($id);

        return view('content.country.form', [
            'country' => $country,
        ]);
    }
}
