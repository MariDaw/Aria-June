<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Models\Categoria;
use App\Models\Imagen;
use App\Models\Producto;
use App\Models\producto_categoria;


use App\Models\Save;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Stripe\Product;

class ProductoController extends Controller
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
        $imagenes = Imagen::all();
        $prodCategorias = producto_categoria::all();

        return view('productos.index', [
            'productos' => $productos,
            'categorias' => $categorias,
            'prodCategorias' => $prodCategorias,
            'imagenes' => $imagenes,
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();

        return view('productos.create', [
            'producto' => $producto,
        ]);

        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

        $data= new Producto();
        $data->titulo = $request->titulo;
        $data->descripcion = $request->descripcion;
        $data->precio = $request->precio;


         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = 'img/Tienda/';
             $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenProducto);
             $data['imagen'] = "$imagenProducto";
         }

         $data->save();

         return redirect()->route('productos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.show', [
            'producto' => $producto,
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.edit', [
            'producto' => $producto,
        ]);

        // return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoRequest  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $prod)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'imagen' => ''
        ]);


         $producto = Producto::where('id', $prod)->first();
         $producto->titulo = $request->titulo;
         $producto->descripcion = $request->descripcion;
         $producto->precio = $request->precio;

         if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'img/Tienda';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $producto['imagen'] = "$imagenProducto";
         }

         $producto->save();
         return redirect()->route('productos.index');
    }


    public function destroy(Producto $producto, producto_categoria $producto_categoria)
    {
        // buscas el padre

        $result = Producto::where('id', $producto->id)->first();

        // buscas al hijo y lo borras

        $resultCa = producto_categoria::where('producto_id', $producto->id);
        $resultCa->delete();




        $result->carritos()->delete();

        $result->delete();
        // $resultCate->delete();

        // borrar el padre

        return redirect()->route('productos.index');

    }


}
