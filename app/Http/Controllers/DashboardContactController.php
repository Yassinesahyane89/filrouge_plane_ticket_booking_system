<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class DashboardContactController extends Controller
{
    public function index()
    {
        return view('content.contact.table');
    }
}
