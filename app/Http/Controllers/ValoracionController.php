<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValoracionRequest;
use App\Http\Requests\UpdateValoracionRequest;
use App\Models\Publicacion;
use App\Models\Valoracion;
use Illuminate\Support\Facades\Auth;

class ValoracionController extends Controller
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
     * @param  \App\Http\Requests\StoreValoracionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Publicacion $publicacion)
    {
        $valoracion = new Valoracion();

        $valoracion->publicacion_id = $publicacion->id;
        $valoracion->user_id = Auth::user()->id;

        $valoracion->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function show(Valoracion $valoracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function edit(Valoracion $valoracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateValoracionRequest  $request
     * @param  \App\Models\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateValoracionRequest $request, Valoracion $valoracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    /* Función que borra like a una publicación*/

    public function destroy(Publicacion $publicacion)
    {
        while (count(Valoracion::where('user_id', Auth::user()->id)->where('publicacion_id', $publicacion->id)->get()) > 0) {

            Valoracion::where('user_id', Auth::user()->id)->where('publicacion_id', $publicacion->id)->delete();
        }

        return redirect()->back();
    }

    /* Función para dar like a una publicación*/

    public static function isLiked(Publicacion $publicacion)
    {
        return count(Valoracion::where('user_id', Auth::user()->id)->where('publicacion_id', $publicacion->id)->get()) !=0;
    }
}
