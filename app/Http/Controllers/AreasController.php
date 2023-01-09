<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Http\Requests\StoreAreasRequest;
use App\Http\Requests\UpdateAreasRequest;

class AreasController extends Controller
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
     * @param  \App\Http\Requests\StoreAreasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAreasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function show(Areas $areas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function edit(Areas $areas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAreasRequest  $request
     * @param  \App\Models\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAreasRequest $request, Areas $areas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Areas $areas)
    {
        //
    }
}
