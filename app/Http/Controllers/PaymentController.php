<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class PaymentController extends Controller
{
    public function index()
    {
        return view('content.pages.payment');
    }

  /**
   * success response method.
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    dd($request->stripeToken);
    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    Stripe\Charge::create([
      "amount" => 100 * 100,
      "currency" => "usd",
      "source" => $request->stripeToken,
    ]);

    Session::flash('success', 'Payment successful!');

    return back();
  }
}
