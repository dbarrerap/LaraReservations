<?php

namespace App\Http\Controllers;

use App\Establecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Establecimiento::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $establecimiento = new Establecimiento();

        $establecimiento->Nombre = $request->Nombre;
        $establecimiento->Direccion = $request->Direccion;

        $establecimiento->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $establecimiento = Establecimiento::findOrFail($request->id);
        
        return $establecimiento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $establecimiento = Establecimiento::find($request->id);

        $establecimiento->Nombre = $request->Nombre;
        $establecimiento->Direccion = $request->Direccion;

        $establecimiento->save();

        return $establecimiento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Establecimiento  $establecimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $establecimiento = Establecimiento::find($request->id);
        $establecimiento->delete();
    }
}
