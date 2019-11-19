<?php

namespace App\Http\Controllers;

use App\Destino;
use App\Region;
use Illuminate\Http\Request;

class DestinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos = Destino::with('relRegion')->get();
        // dd($destinos);

        return view('adminDestinos', ['destinos' => $destinos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Region::get();
        return view('formAgregarDestino', ['regiones2' => $regiones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destino = new Destino;
        $destino->destNombre = $request->destNombre;
        $destino->regID = $request->regID;
        $destino->destPrecio = $request->destPrecio;
        $destino->destAsientos = $request->destAsientos;
        $destino->destDisponibles = $request->destDisponibles;
        $destino->save();

        return redirect('/adminDestinos')->with('mensaje', 'Se ha agregado el destino '. $destino->destNombre .' correctamenmte');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function show($destID)
    {
        $destino = Destino::find($destID);

        return view('/formEliminarDestino', ['destino' => $destino]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function edit($destID)
    {
        $destino = Destino::find($destID);
        $regiones = Region::get();

        return view('formModificarDestino', [
                                                'destino' => $destino,
                                                'regiones' => $regiones
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $destino = Destino::find($request->destID);
        $destino->destNombre = $request->destNombre;
        $destino->regID = $request->regID;
        $destino->destPrecio = $request->destPrecio;
        $destino->destAsientos = $request->destAsientos;
        $destino->destDisponibles = $request->destDisponibles;
        $destino->save();

        return redirect('/adminDestinos')->with('mensaje', 'Se ha modificado el destino '. $request->destNombre .' correctamenmte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $destino = Destino::find($request->destID);
        $destNombre = $request->destNombre;
        $destino->delete();

        return redirect('/adminDestinos')->with('mensaje', 'Se ha eliminado el destino '. $destNombre .' correctamenmte');
    }
}
