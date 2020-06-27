<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkoutStripe(){
        \Stripe\Stripe::setApiKey("sk_test_51GyekPA1bjxouOwwx99DxIfvALqh3wROoUgL12kpzRK5AbxDmDHuV6LYvhGPCIgGDQo6l2FYFVsUhNrsNehajW0f003RCKnr0J");

        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount'    =>  18000,
            'currency'  =>  'usd',
            'description'   =>  '4D RUN 1.0 PARLEY SHOES Payment. Developer www.jahidul.info',
            'source'    =>  $token,
        ]);

        return back();
    }
}
