<?php

namespace App\Http\Controllers;

use Stripe\{Stripe, Charge, Customer};

class PurchasesController extends Controller
{

    public function store(){
      //dd(request()->all());

      Stripe::setApiKey(config('services.stripe.secret'));


      $customer = Customer::create([

          'email' => request('stripeEmail'),
          'source' => request('stripeToken')

      ]);

      Charge::create([

        'customer' => $customer->id,
        'amount' => 2500,
        'currency' => 'aud'

      ]);

      return view('purchaseComplete');

    }
}
