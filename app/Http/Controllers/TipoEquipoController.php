<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Equipo;
use App\Http\Requests\StoreTipo_EquipoRequest;
use App\Http\Requests\UpdateTipo_EquipoRequest;

class TipoEquipoController extends Controller
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
     * @param  \App\Http\Requests\StoreTipo_EquipoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipo_EquipoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_Equipo  $tipo_Equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Equipo $tipo_Equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_Equipo  $tipo_Equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_Equipo $tipo_Equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipo_EquipoRequest  $request
     * @param  \App\Models\Tipo_Equipo  $tipo_Equipo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipo_EquipoRequest $request, Tipo_Equipo $tipo_Equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_Equipo  $tipo_Equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_Equipo $tipo_Equipo)
    {
        //
    }
}
