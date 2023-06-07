<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaveProRequest;
use App\Http\Requests\UpdateSaveProRequest;
use App\Models\Producto;
use App\Models\Save;
use App\Models\SavePro;
use Illuminate\Support\Facades\Auth;

class SaveProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();

        return view('productos.show', [
            'producto' => $producto,
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
     * @param  \App\Http\Requests\StoreSaveProRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaveProRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SavePro  $savePro
     * @return \Illuminate\Http\Response
     */
    public function show(SavePro $savePro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SavePro  $savePro
     * @return \Illuminate\Http\Response
     */
    public function edit(SavePro $savePro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSaveProRequest  $request
     * @param  \App\Models\SavePro  $savePro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaveProRequest $request, SavePro $savePro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SavePro  $savePro
     * @return \Illuminate\Http\Response
     */
    public function destroy(SavePro $savePro)
    {
        //
    }

    /* Función que añade un producto al perfil*/

    public function productoperfil(Producto $producto)
    {
        $savePros = SavePro::where('producto_id', $producto->id)->where('user_id', auth()->user()->id)->first();

        if (empty($savePros)) {
            $savePros = new SavePro();

            $savePros->user_id = Auth::user()->id;
            $savePros->producto_id = $producto->id;

            $savePros->save();

            return redirect()->back()->with('success', 'Producto añadido al perfil.');
        }

    }

    public $classChanged = false;

    public $isSetClicked = false;
    public $isAddClicked = false;
    public function myClickFunction()
    {
        $this->classChanged = true;
    }

    public function SetClicked()
    {
     //this will give you toggling behavior
     $this->isSetClicked == false ? $this->isSetClicked = true : $this->isSetClicked = false;
    }

    /* Función que elimina un producto del perfil*/

    public function unproduct($id)
    {

        $savePros = SavePro::find($id);

        $savePros->delete();

        return redirect()->route('perfil.index');
    }
}
