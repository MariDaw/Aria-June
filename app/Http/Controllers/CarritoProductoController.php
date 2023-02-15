<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storecarrito_productoRequest;
use App\Http\Requests\Updatecarrito_productoRequest;
use App\Models\carrito_producto;

class CarritoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storecarrito_productoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecarrito_productoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carrito_producto  $carrito_producto
     * @return \Illuminate\Http\Response
     */
    public function show(carrito_producto $carrito_producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carrito_producto  $carrito_producto
     * @return \Illuminate\Http\Response
     */
    public function edit(carrito_producto $carrito_producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecarrito_productoRequest  $request
     * @param  \App\Models\carrito_producto  $carrito_producto
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecarrito_productoRequest $request, carrito_producto $carrito_producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carrito_producto  $carrito_producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(carrito_producto $carrito_producto)
    {
        //
    }
}
