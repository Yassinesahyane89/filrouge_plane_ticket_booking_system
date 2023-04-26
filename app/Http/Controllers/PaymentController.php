<?php

namespace App\Http\Controllers;
// use Session;
// use Stripe;

use App\Http\Requests\PaymentRequest;
use App\Models\Passenger;
use App\Models\Ticket;
use Faker\Provider\ar_EG\Payment;
use Stripe\Charge;
use Stripe\Exception\CardException;
use Stripe\Stripe;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
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
    $rules = [
      'cardholder-name' => 'required|string|max:255',
      'card-number' => 'required|numeric|digits_between:13,16',
      'expiry-month' => 'required|string',
      'expiry-year' => 'required|integer',
      'cvv' => 'required|numeric|digits:3'
    ];

    // define custom error messages
    $messages = [
      'cardholder-name.required' => 'Please enter cardholder name',
      'card-number.required' => 'Please enter card number',
      'card-number.numeric' => 'Card number should be numeric',
      'card-number.digits_between' => 'Card number should be between 13 and 16 digits',
      'expiry-month.required' => 'Please select expiry month',
      'expiry-year.required' => 'Please select expiry year',
      'expiry-year.integer' => 'Expiry year should be an integer',
      'cvv.required' => 'Please enter CVV',
      'cvv.numeric' => 'CVV should be numeric',
      'cvv.digits' => 'CVV should be 3 digits'
    ];

    // run validation
    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
      return redirect()->back()
        ->withErrors($validator)
        ->withInput();
    }
    Stripe::setApiKey('sk_test_51MkrESIAmIvUvoSuZGR7I9J12Kdv93lTGB7joGuIzvZVkQxDKTkvuBlkOJRNsYAwnAK5k9hN1ZLuX5Pasuum2nka00LMGZNmVf');
    $stripe = new StripeClient('sk_test_51MkrESIAmIvUvoSuZGR7I9J12Kdv93lTGB7joGuIzvZVkQxDKTkvuBlkOJRNsYAwnAK5k9hN1ZLuX5Pasuum2nka00LMGZNmVf');
    $resp = $stripe->tokens->create([
      'card' => [
        'number' => '4242424242424242',
        'exp_month' => 4,
        'exp_year' => 2024,
        'cvc' => '314',
      ],
    ]);
    $amount = session('price') * session('numberPassenger') * 100;
    try {
      Charge::create([
        "amount" => $amount,
        "currency" => "mad",
        "source" => $resp->id,
      ]);
      $NmbPasssenger = $this->StorePassenger();
      $this->StoreTicket($NmbPasssenger);
      Session::flash('success', 'Payment successful!');
      return back();
    } catch (CardException $e) {
      Session::flash('error', $e->getError()->message);
      return back();
    }
  }

  public function StorePassenger(){
    $passengerId = [];
    for($i=0;$i<session('numberPassenger');$i++){
      $passenger = new Passenger();
      $passenger->first_name = session('passengers')[$i]['firstname'];
      $passenger->last_name = session('passengers')[$i]['lastname'];
      $passenger->phone_number = session('passengers')[$i]['phone'];
      $passenger->email = session('passengers')[$i]['email'];
      $passenger->save();
      array_push($passengerId,$passenger->id);
    }
    return $passengerId;
  }

  public function StoreTicket($passengerId)
  {
    for($i=0;$i<session('numberPassenger');$i++){
      $ticket = new Ticket();
      $ticket->passenger_id = $passengerId[$i];
      $ticket->price = session('price');
      $classId = session('classId');
      $seatId = \App\Models\Seat::where('cabin_id',$classId)->first()->id;
      $ticket->seat_id = $seatId;
      $ticket->flight_id = session('flightId');
      $ticket->save();
    }
  }
}
