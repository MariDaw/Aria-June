<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublicacionRequest;
use App\Http\Requests\UpdatePublicacionRequest;
use App\Models\Famoso;
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

        return view('publicaciones.index', [
            'publicaciones' => $publicaciones,
            'famosos' => $famosos,
            'valoraciones' => $valoraciones,
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

        return view('publicaciones.create', [
            'publicacion' => $publicacion,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePublicacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePublicacionRequest $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

         $publicacion = $request->all();

         if($foto = $request->file('foto')) {
             $rutaGuardarImg = 'foto/';
             $imagenPublicacion = date('YmdHis'). "." . $foto->getClientOriginalExtension();
             $foto->move($rutaGuardarImg, $imagenPublicacion);
             $publicacion['foto'] = "$imagenPublicacion";
         }

         Publicacion::create($publicacion);
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
    public function update(Request $request, Publicacion $publicacion)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto' => 'required'
        ]);
         $publi = $request->all();
         if($foto = $request->file('foto')){
            $rutaGuardarImg = 'foto/';
            $imagenPublicacion = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImg, $imagenPublicacion);
            $publi['foto'] = "$imagenPublicacion";
         }else{
            unset($publi['foto']);
         }
         $publicacion->update($publi);
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
        $publicacion = Publicacion::findOrFail($id);
        $imagenes = count($publicacion->imagenes);
        $comentarios = count($publicacion->comentarios);
        if ($imagenes > 0) {
            for ($i=0; $i < $imagenes; $i++) {
            $publicacion->imagenes[$i]->delete();
            }
        }
        if ($comentarios > 0) {
            for ($i=0; $i < $comentarios; $i++) {
            $publicacion->comentarios[$i]->delete();
            }
        }
        $publicacion->delete();

        return redirect()->back()
            ->with('success', 'Publicación borrada correctamente');
    }


}
