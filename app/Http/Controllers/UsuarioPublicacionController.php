<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeusuario_publicacionRequest;
use App\Http\Requests\Updateusuario_publicacionRequest;
use App\Models\usuario_publicacion;

class UsuarioPublicacionController extends Controller
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
     * @param  \App\Http\Requests\Storeusuario_publicacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeusuario_publicacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario_publicacion  $usuario_publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(usuario_publicacion $usuario_publicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario_publicacion  $usuario_publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario_publicacion $usuario_publicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateusuario_publicacionRequest  $request
     * @param  \App\Models\usuario_publicacion  $usuario_publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Updateusuario_publicacionRequest $request, usuario_publicacion $usuario_publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario_publicacion  $usuario_publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario_publicacion $usuario_publicacion)
    {
        //
    }
}
