<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerfilRequest;
use App\Http\Requests\UpdatePerfilRequest;
use App\Models\Famoso;
use App\Models\Perfil;
use App\Models\Producto;
use App\Models\Publicacion;
use App\Models\Save;
use App\Models\SavePro;
use App\Models\Valoracion;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfil = Perfil::all();
        $perfil->user_id = Auth::user()->name;
        $famosos = Famoso::all();
        $publicacion = Publicacion::all();
        $saves = Save::all();
        $save_pros = SavePro::all();
        $productos = Producto::all();
        $valoraciones = Valoracion::all();

        return view('perfil.index', [
            'perfil' => $perfil,
            'famosos' => $famosos,
            'saves' => $saves->where('user_id', Auth::user()->id),
            'savePros' => $save_pros->where('user_id', Auth::user()->id),
            'valoraciones' => $valoraciones,
            'publicacion' => $publicacion,
            'productos' => $productos,
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
     * @param  \App\Http\Requests\StorePerfilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerfilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerfilRequest  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerfilRequest $request, Perfil $perfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        //
    }
}
