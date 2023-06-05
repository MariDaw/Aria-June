<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\producto_categoria;
use Livewire\Component;
use Livewire\WithPagination;

class FiltradoProductosAdmin extends Component
{   public $productoSelect = 'All'; //Devuelve todos los productos

    use WithPagination;

    /* Menú desplegable de productos*/

    public function render()
    {

        $productos = Producto::all();

        if ($this->productoSelect == 'All')
        {
            $producto = Producto::all();
        }
         else {
            $productoLive = Categoria::where('nombre', $this->productoSelect)->get()[0]->nombre;

            $producto = Producto:: where('titulo', $productoLive)->get();
        }

        $categorias = Categoria::all();

        return view('livewire.filtrado-productosAdmin', [
            'productosAll' => $productos,
            'productos' => $producto,
            'categorias' => $categorias,
        ]);
        /* dd($this->famosoSelect); */


    }

    public function updatingActive()
    {
        $this->resetPage();
    }

    public function updatingproductoSelect()
    {
        $this->resetPage();
    }

}
