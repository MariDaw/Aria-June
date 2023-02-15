<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;


class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    public function stripe()
    {
        $carritos = Carrito::all();

        return view('stripe', [
            'carritos' => $carritos->where('user_id', Auth::user()->id),
        ]);
    }


    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    /* Función pago con tarjeta de crédito*/

    public function stripePost( Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com."
        ]);

        // Session::flash('success', 'Payment successful!');
        return redirect()->route('carritos.index')->with('success', 'Pago realizado con exito.');
        // return back();
    }
}
