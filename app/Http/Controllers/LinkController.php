<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use App\Models\Publicacion;
use App\Models\Valoracion;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $publicacion = Publicacion::all();
        $link = Link::all();

        return view('publicaciones.show', [
            'publicacion' => $publicacion,
            'link' => $link,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $publicacion = new Publicacion();
        $link = new Link();

        return view('link.create', [
            'publicacion' => $publicacion,
            'link' => $link,
        ]);

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLinkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Publicacion $publicacion)
    {
        $request->validate([
            'prenda' => 'required|max:255',
            'url' => 'required|url',

        ]);

        $link = new Link();
        $link->prenda = $request->prenda;
        $link->url = $request->url;
        $link->publicacion_id = $publicacion->id;

        $link->save();

        return redirect()->route('publicaciones.index')->with('success', 'Enlace creado exitosamente.');
        // return redirect()->route('publicaciones.show', $publicacion)->with('success', 'Enlace creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        $publicacion = Publicacion::all();
        $valoraciones = Valoracion::all();
        $links = Link::all();
        return view('publicaciones.show', [
            'publicacion' => $publicacion,
            'valoraciones' => $valoraciones,
            'links' => $links,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLinkRequest  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        //
    }
}
