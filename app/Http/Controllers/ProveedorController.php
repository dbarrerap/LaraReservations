<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Proveedor::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $proveedor = new Proveedor();

        $proveedor->Nombre = $request->Nombre;
        $proveedor->Direccion = $request->Direccion;
        $proveedor->RUC = $request->RUC;
        $proveedor->Activo = 1;

        $proveedor->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $proveedor = Proveedor::findOrFail($request->id);
        return $proveedor;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $proveedor = Proveedor::findOrFail($request->id);

        $proveedor->Nombre = $request->Nombre;
        $proveedor->Direccion = $request->Direccion;
        $proveedor->RUC = $request->RUC;
        $proveedor->Activo = $request->Activo;

        $proveedor->save();

        return $proveedor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $proveedor = Proveedor::findOrFail($request->id);
        $proveedor->delete();
    }
}
