<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Evento::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = new Evento();

        $evento->Nombre = $request->Nombre;
        $evento->Descripcion = $request->Descripcion;
        $evento->Fecha = $request->Fecha;
        $evento->establecimiento_id = $request->establecimiento_id;

        $evento->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $evento = Evento::findOrFail($request->id);
        return $evento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $evento = Evento::findOrFail($request->id);

        $evento->Nombre = $request->Nombre;
        $evento->Descripcion = $request->Descripcion;
        $evento->Fecha = $request->Fecha;

        $evento->save();

        return $evento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $evento = Evento::findOrFail($request->id);
        $evento->delete();
    }
}
