<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

use Stripe\Exception\CardException;
use Stripe\StripeClient;

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
    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    $stripe = new \Stripe\StripeClient(
      'sk_test_51MkrESIAmIvUvoSuZGR7I9J12Kdv93lTGB7joGuIzvZVkQxDKTkvuBlkOJRNsYAwnAK5k9hN1ZLuX5Pasuum2nka00LMGZNmVf'
    );
    $resp = $stripe->tokens->create([
      'card' => [
        'number' => '4242424242424242',
        'exp_month' => 4,
        'exp_year' => 2024,
        'cvc' => '314',
      ],
    ]);

    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    // dd(+$request['totalprice']);
    Stripe\Charge::create([
      "amount" => +$request['totalprice'] * 100,
      "currency" => "mad",
      "source" => $resp->id,
    ]);
    
    Session::flash('success', 'Payment successful!');

    return back();
  }
}
