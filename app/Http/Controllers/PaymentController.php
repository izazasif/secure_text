<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGetway;

use Cartalyst\Stripe\Laravel\Facades\Stripe;

class PaymentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('payment.index');
    }

    public function store(Request $request)
    {
    	try {
            $charge = Stripe::charges()->create([
                'amount' => 100,
                'currency' => "USD",
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => "admin@email.com",
                'metadata' => [
                	'quantity' => 3,
                ],
            ]);

        } catch (Exception $e) {


        }

        return "ok";
    }
}
