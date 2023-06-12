<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublicacionRequest;
use App\Http\Requests\UpdatePublicacionRequest;
use App\Models\Famoso;
use App\Models\Save;
use App\Models\Comentario;
use App\Models\Imagen;
use App\Models\Link;
use App\Models\Publicacion;

use App\Models\Valoracion;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $publicaciones = Publicacion::all();
        $famosos = Famoso::all();
        $valoraciones = Valoracion::all();
        $save = Save::all();
        $link = Link::all();

        return view('publicaciones.index', [
            'publicaciones' => $publicaciones,
            'famosos' => $famosos,
            'valoraciones' => $valoraciones,
            'save' => $save,
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
        // $data = Publicacion::join('links', 'links.publicacion_id', '=', 'publicacions.id');

        return view('publicaciones.create', [
            'publicacion' => $publicacion,
            'link' => $link,
        ]);

        return view('publicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePublicacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,svg|max:1024',
            'prenda' => 'required|array',
            'prenda.*' => 'required|string',
            'url' => 'required|array',
            'url.*' => 'required|url',


        ]);

        $data = new Publicacion();
        $data->titulo = $request->titulo;
        $data->descripcion = $request->descripcion;


         if($foto = $request->file('foto')) {
             $rutaGuardarImg = 'img/publicaciones/';
             $imagenPublicacion =  $foto->getClientOriginalName();
             $foto->move($rutaGuardarImg, $imagenPublicacion);
             $data['foto'] = "img/publicaciones/".$imagenPublicacion;
         }

         $data->save();

         $link = new Link;

         $link->prenda = $request->prenda;
         $link->url = $request->url;
         $publicacionId = $data->id;
         $link->publicacion_id = $publicacionId;

         $link->save();




         return redirect()->route('publicaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {

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
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion = Publicacion::findOrFail($id);

        return view('publicaciones.edit', [
            'publicacion' => $publicacion,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePublicacionRequest  $request
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $publi)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto' => ''
        ]);

        $publicacion = Publicacion::where('id', $publi)->first();
        $publicacion->titulo = $request->titulo;
        $publicacion->descripcion = $request->descripcion;


        if($foto = $request->file('foto')) {
            $rutaGuardarImg = 'img/publicaciones/';
            $imagenPublicacion =  $foto->getClientOriginalName();
            $foto->move($rutaGuardarImg, $imagenPublicacion);
            $publicacion['foto'] = "img/publicaciones/".$imagenPublicacion;
        }

         $publicacion->save();
         return redirect()->route('publicaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */




    public function destroy($id)
    {

        // borrar el padre

        // dd($publicacion);
        $debu = Publicacion::where('id', $id)->first();


        $resultSa = Save::where('publicacion_id', $id);
        $resultSa->delete();

        $resultLi = Link::where('publicacion_id', $id);
        $resultLi->delete();

        $resultLi = Comentario::where('publicacion_id', $id);
        $resultLi->delete();


        $debu->delete();

        return redirect()->route('publicaciones.index');

    }


}
