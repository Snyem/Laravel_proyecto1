<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class RegionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    ###devuelve un listado de todas las regiones
    public function index()
    {
        //obteniendo un listado de regiones puedo utilizar raw sql, query builder o orm. Aquí está con orm
        $regiones = Region::get();
        // dd($regiones);

        return view('adminRegiones', ['regiones' => $regiones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formAgregarRegion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $regNombre = $_POST['regNombre'];    //forma anterior
        $regNombre = $request->input('regNombre');
        $region = new Region;  //es igual si lo coloco a no los paréntesis, porque no tengo un constructor

        //le asigno el/los valor/es
        $region->regNombre = $regNombre;

        //guardo los datos
        $region->save();

        return redirect('/adminRegiones')->with('mensaje', 'Se ha agregado la región '. $regNombre .' correctamenmte');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($regID)
    {
        $region = Region::find($regID);
        // dd($region);

        return view('formEliminarRegion', ['region' => $region]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($regID)
    {
        $region = Region::find($regID);
        // dd($region);

        return view('formModificarRegion', ['region' => $region]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)    //tenía un segudno parámetro id, pero lo borro, porque lo manejo de otra manera
    {
        $regID = $request->input('regID');
        $regNombre = $request->input('regNombre');

        //traer el dato de la BD
        $region = Region::find($regID);    //no genero uno nuevo, encuentro el que está
        $region->regNombre = $regNombre;
        $region->save();

        return redirect('/adminRegiones')->with('mensaje', 'Se ha modificado la región '. $regNombre .' correctamenmte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $regID = $request->input('regID');
        $region = Region::find($regID);
        $regNombre = $region->regNombre;
        $region->delete();

        return redirect('/adminRegiones')->with('mensaje', 'Se ha eliminado la región '. $regNombre .' correctamenmte');
    }
}
