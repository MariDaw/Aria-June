<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFamosoRequest;
use App\Http\Requests\UpdateFamosoRequest;
use App\Models\Famoso;
use App\Models\Publicacion;

class FamosoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicacion::all();
        return view('welcome', [
            'publicaciones' => $publicaciones,
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
     * @param  \App\Http\Requests\StoreFamosoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFamosoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function show(Famoso $famoso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function edit(Famoso $famoso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFamosoRequest  $request
     * @param  \App\Models\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFamosoRequest $request, Famoso $famoso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Famoso $famoso)
    {
        //
    }
}
