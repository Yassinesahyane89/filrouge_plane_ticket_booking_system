<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
  {
    // get all the contacts
    return view('content.mywebsite.contact');
  }

  public function store(ContactRequest $request)
  {
    // store the contact form data in the database
    Contact::create($request->validated());

    // redirect back to the contact form with a success message
    return redirect()->back()->with('success', 'Thanks for contacting us!');
  }
}
