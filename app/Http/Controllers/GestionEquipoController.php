<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Detalle_Equipo;
use App\Models\Gestion_Equipo;
use App\Models\Tipo_Equipo;
use App\Models\User;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class GestionEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function saveEquipo(Request $request)
    {
        return response()->json(['msj' => 'Success']);
    }

    public function index()
    {
        $gestion_equipo = Gestion_Equipo::all();

        $tipo_equipo = Tipo_Equipo::all();

        $areas = Areas::all();

        $users = User::all();

        return view('gestion_equipo.index' , compact(['gestion_equipo','tipo_equipo' , 'users', 'areas']));
        // return view('gestion_equipo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tipo_equipo = Tipo_Equipo::all();

        // $areas = Areas::all();

        // $users = User::all();

        // return view('gestion_equipo.create' ,  compact(['tipo_equipo' , 'users', 'areas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Gestion_Equipo::updateOrCreate([
            'numero_inventario' => $request->numero_serie,
            'numero_serie' => $request->numero_serie
        ],

        [

            'marca' => $request->marca, 
            'modelo' => $request->modelo,
            'fecha_compra' => $request->fecha_compra,
            'provedor' => $request->provedor,
            'costo' => $request->costo,
            'cantidad_ram' => ($request->cantidad_ram == '') ? 'NO APLICA': $request->cantidad_ram,
            'procesador' => ($request->procesador == '') ? 'NO APLICA': $request->procesador,
            'cantidad_disco_duro' => ($request->cantidad_disco_duro == '') ? 'NO APLICA': $request->cantidad_disco_duro,
            'software_instalado' => ($request->software_instalado == '') ? 'NO APLICA': $request->software_instalado,
            'id_area' => $request->id_area,
            'id_tipo_equipo' => $request->id_tipo_equipo,
            'id_usuario' => ($request->id_usuario == '-') ? NULL : $request->id_usuario,

        ]);        
        // $gestion_equipo = Gestion_Equipo::create($request->all());
        // $gestion_equipo = new Gestion_Equipo;

        // $gestion_equipo->numero_inventario = $request->numero_inventario;
        // $gestion_equipo->numero_serie = $request->numero_serie;
        // $gestion_equipo->marca = $request->marca;
        // $gestion_equipo->modelo = $request->modelo;
        // $gestion_equipo->fecha_compra = $request->fecha_compra;
        // $gestion_equipo->provedor = $request->provedor;
        // $gestion_equipo->costo = $request->costo;
        // $gestion_equipo->cantidad_ram = ($request->cantidad_ram == '') ? 'NO APLICA': $request->cantidad_ram;
        // $gestion_equipo->procesador = ($request->procesador == '') ? 'NO APLICA': $request->procesador;
        // $gestion_equipo->cantidad_disco_duro = ($request->cantidad_disco_duro == '') ? 'NO APLICA': $request->cantidad_disco_duro;
        // $gestion_equipo->software_instalado = ($request->software_instalado == '') ? 'NO APLICA': $request->software_instalado;
        // $gestion_equipo->id_area = $request->id_area;
        // $gestion_equipo->id_tipo_equipo = $request->id_tipo_equipo;
        // $gestion_equipo->id_usuario = ($request->id_usuario == '-') ? NULL : $request->id_usuario;

        // $gestion_equipo->save();
        // return $request->numero_serie;
        // return $gestion_equipo;
        return redirect()->route('gestion_equipo.inicio.index')->with('equipoinsert', 'Equipo Guardado');
        // return redirect()->route('gestion_equipo.index',$persona)->with('personainsert', 'Persona Save Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestion_Equipo $gestion_equipo)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestion_Equipo $gestion_equipo)
    {
        // return "eliminado";
        $gestion_equipo->delete();
        return redirect()->route('gestion_equipo.inicio.index')->with('equipodelete', 'Equipo Eliminado');
    }
}
