<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeproducto_categoriaRequest;
use App\Http\Requests\Updateproducto_categoriaRequest;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\producto_categoria;

class ProductoCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();

        return view('productos.index', [
            'productos' => $productos,
            'categorias' => $categorias,
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
     * @param  \App\Http\Requests\Storeproducto_categoriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproducto_categoriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto_categoria  $producto_categoria
     * @return \Illuminate\Http\Response
     */
    public function show(producto_categoria $producto_categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto_categoria  $producto_categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(producto_categoria $producto_categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproducto_categoriaRequest  $request
     * @param  \App\Models\producto_categoria  $producto_categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproducto_categoriaRequest $request, producto_categoria $producto_categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto_categoria  $producto_categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto_categoria $producto_categoria)
    {
        //
    }
}
