<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaveRequest;
use App\Http\Requests\UpdateSaveRequest;
use App\Models\Famoso;
use App\Models\Producto;
use App\Models\Publicacion;
use App\Models\Save;
use App\Models\Valoracion;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valoraciones = Valoracion::all();
        $publicaciones = Publicacion::all();
        $famosos = Famoso::all();
        $save = Save::all();

        return view('publicaciones.index', [
            'publicaciones' => $publicaciones,
            'famosos' => $famosos,
            'valoraciones' => $valoraciones,
            'save' => $save,
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
     * @param  \App\Http\Requests\StoreSaveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaveRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Save  $save
     * @return \Illuminate\Http\Response
     */
    public function show(Save $save)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Save  $save
     * @return \Illuminate\Http\Response
     */
    public function edit(Save $save)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSaveRequest  $request
     * @param  \App\Models\Save  $save
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaveRequest $request, Save $save)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Save  $save
     * @return \Illuminate\Http\Response
     */
    public function destroy(Save $save)
    {
        //
    }

    /* Función que añade una publicación al perfil*/
    public function anadiralperfil(Publicacion $publicacion)
    {
        $save = Save::where('publicacion_id', $publicacion->id)->where('user_id', auth()->user()->id)->first();

        if (empty($save)) {
            $save = new Save();

            $save->user_id = Auth::user()->id;
            $save->publicacion_id = $publicacion->id;

            $save->save();

            return redirect()->back()->with('success', 'Publicación añadida al perfil.');
        }

        $save->save();

        return redirect()->back()->with('success', 'Publicación añadida al perfil.');
    }



    /* Función que quita una publicación del perfil*/

    public function unsave($id)
    {

        $save = Save::find($id);

        $save->delete();

        return redirect()->route('perfil.index');
    }


    public function listOrder()
    {
        $orders = Save::latest()->get();
        return view('orders.list',['orders' => $orders]);
    }


}
