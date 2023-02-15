<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComentarioRequest;
use App\Http\Requests\UpdateComentarioRequest;
use App\Models\Comentario;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
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
     * @param  \App\Http\Requests\StoreComentarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComentarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComentarioRequest  $request
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComentarioRequest $request, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {

    }

    /* Función que añade un comentario */
    public function anadircomentario()
    {
        $validados = request()->validate([
            'comentario' => 'required|string|max:100',
            'publicacion' => 'required',
        ]);

        $comentario = new Comentario();

        $comentario->publicacion_id = $validados['publicacion'];
        $comentario->user_id = Auth::user()->id;
        $comentario->texto = $validados['comentario'];
        $comentario->save();

        return redirect()->back();

    }

    /* Función que elimina un comentario*/
    public function eliminarcomentario($id) {

        if ($comentario = Comentario::where('user_id', auth()->user()->id)->find($id))
        {
            $comentario->delete();
        } else {
            return redirect()->back()->with('success', 'No tienes permiso');
        }

        return redirect()->back();

    }
}
