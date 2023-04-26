<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class DashboardContactController extends Controller
{
    public function index()
    {
        return view('content.contact.table');
    }
}
