<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarritoRequest;
use App\Http\Requests\UpdateCarritoRequest;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Stripe;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritos = Carrito::all();

        return view('carritos.index', [
            'carritos' => $carritos->where('user_id', Auth::user()->id),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarritoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarritoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarritoRequest  $request
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarritoRequest $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        //
    }

    /* Función que añade productos al carrito*/
    public function anadiralcarrito(Producto $producto)
    {
        $carrito = Carrito::where('producto_id', $producto->id)->where('user_id', auth()->user()->id)->first();

        if (empty($carrito)) {

            $carrito = new Carrito();

            $carrito->user_id = Auth::user()->id;
            $carrito->producto_id = $producto->id;
            $carrito->cantidad = 1;

            $carrito->save();

            return redirect()->route('productos.index')->with('success', 'Producto añadido al carrito.');
        }

        $carrito->cantidad += 1;
        $carrito->save();

        return redirect()->route('productos.index')->with('success', 'Producto anadido al carrito.');
    }

    /* Función que resta un producto del carrito*/
    public function restar(Carrito $carrito)
    {

        if ($carrito->cantidad === 1) {
            $carrito->delete();


            return redirect()->route('carritos.index')->with('success', 'Producto borrado del carrito.');
        }

        $carrito->cantidad -= 1;
        $carrito->save();

        return redirect()->route('carritos.index')->with('success', 'Producto restado al carrito.');
    }

    /* Función que suma productos del carrito*/
    public function sumar(Carrito $carrito)
    {
        $carrito->cantidad += 1;
        $carrito->save();

        return redirect()->route('carritos.index')->with('success', 'Producto sumado al carrito.');
    }

    //
    public function eliminar(Carrito $carrito)
    {
            $carrito->delete();


            return redirect()->route('carritos.index')->with('success', 'Producto borrado del carrito.');


    }

    /* Función que vacia el carrito*/
    public function vaciar()
    {
        $carrito = Carrito::where('user_id', auth()->user()->id);
        $carrito->delete();

        return redirect()->route('carritos.index')->with('success', 'Carrito vaciado con exito.');
    }



    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {


        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com."
        ]);

        return redirect()->route('carritos.index')->with('success', 'Pago realizado con exito.');

        // return back();
    }
}
