@extends('adminlte::page')

@section('title', 'Gestion Equipos')

@section('content_header')
    <h1>Gestion de Equipos</h1>
@stop

@section('content')

    @if (session('equipoinsert'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{session('equipoinsert')}}</strong>
    </div>
    @endif
    @if (session('equipodelete'))
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{session('equipodelete')}}</strong>
    </div>
    @endif
    <!-- Large modal -->
    <div class="card">
        <div class="card-body">
            <button id="btn_modal" type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target=".bd-example-modal-lg">Registrar Nuevo</button>

            <table class="table table-striped table-responsive" id="tbl_equipos">
                <thead>
                    <tr>
                    <th>Numero Inventario</th>
                    <th>Numero Serie</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Fecha Compra</th>
                    <th>Provedor</th>
                    <th>Costo</th>
                    <th>Cantidad RAM</th>
                    <th>Procesador</th>
                    <th>Disco Duro</th>
                    <th>Software</th>
                    <th>Area</th>
                    <th>Tipo Equipo</th>
                    <th>Usuario</th> 
                    <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gestion_equipo as $gestion)
                    <tr>
                        <td>{{$gestion->numero_inventario}}</td>
                        <td>{{$gestion->numero_serie}}</td>
                        <td>{{$gestion->marca}}</td>
                        <td>{{$gestion->modelo}}</td>
                        <td>{{$gestion->fecha_compra}}</td>
                        <td>{{$gestion->provedor}}</td>
                        <td>{{$gestion->costo}}</td>
                        <td>{{$gestion->cantidad_ram}}</td>
                        <td>{{$gestion->procesador}}</td>
                        <td>{{$gestion->cantidad_disco_duro}}</td>
                        <td>{{$gestion->software_instalado}}</td>
                        <td>{{$gestion->id_area}}</td>
                        <td>{{$gestion->id_tipo_equipo}}</td>
                        <td>{{$gestion->id_usuario}}</td>
                        <td>
                            <form action="{{route('gestion_equipo.inicio.destroy',$gestion)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-block">Borrar</button>
                            </form>
                            <button onclick="editarRegistro(event, {{$gestion}} ,1 );" type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">Editar</button>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>

        </div>
    </div>
    

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="false" id="modal_equipo_nuevo">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo</h5>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="{{ route('gestion_equipo.inicio.store') }}" method="POST" id="formEquipoNuevo">
                        {{-- <form class="row g-3" id="formEquipoNuevo"> --}}
                        @csrf
                        <div class="col-6">
                            <label for="" class="form-label">Numero de Inventario</label>
                            <input type="text" class="form-control" name="numero_inventario" id="numero_inventario" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Numero de Serie</label>
                            <input type="text" class="form-control" name="numero_serie" id="numero_serie" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Marca</label>
                            <input type="text" class="form-control" name="marca" id="marca" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="modelo" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Fecha Compra</label>
                            <input type="date" class="form-control" name="fecha_compra" id="fecha_compra" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Provedor</label>
                            <input type="text" class="form-control" name="provedor" id="provedor" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Costo</label>
                            <input type="text" class="form-control" name="costo" id="costo" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Tipo Equipo</label>
                            <select name="id_tipo_equipo" id="id_tipo_equipo" class="form-control" onchange="mostrarInputs();" required>
                                <option value='-' selected>-</option>
                                @foreach ($tipo_equipo as $tipo_equip)
                                <option value="{{ $tipo_equip->id_tipo_equipo }}">{{ $tipo_equip->nombre_tipo_equipo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6" id="id_cantidad_ram" hidden>
                            <label for="" class="form-label">Cantidad RAM</label>
                            <input type="text" class="form-control" name="cantidad_ram" id="cantidad_ram">
                        </div>
                        <div class="col-6" id="id_procesador" hidden>
                            <label for="" class="form-label">Procesador</label>
                            <input type="text" class="form-control" name="procesador" id="procesador">
                        </div>
                        <div class="col-6" id="id_cantidad_disco_duro" hidden>
                            <label for="" class="form-label">Cantidad Disco Duro</label>
                            <input type="text" class="form-control" name="cantidad_disco_duro" id="cantidad_disco_duro">
                        </div>
                        <div class="col-12" id="id_software_instalado" hidden>
                            <label for="" class="form-label">Software Instalado</label>
                            <textarea class="form-control" name="software_instalado" id="software_instalado" cols="10" rows="10"></textarea>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Area</label>
                            <select name="id_area" id="id_area" class="form-control" required>
                                <option value='-' selected>-</option>
                                @foreach ($areas as $area)
                                <option value="{{ $area->id_area }}">{{ $area->nombre_area }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Usuario</label>
                            <select class="form-control" name="id_usuario" id="id_usuario">
                                <option value='-' selected>-</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="col-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                            </div>
                        </div> --}}
                        <div class="col-12 mt-2">
                            {{-- <button onclick="guardarEquipo(event);" class="btn btn-primary btn-block">Registrar</button> --}}
                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>




@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/js/bootstrap.js') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">

@stop

@section('js')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/js/config_create_gestion.js') }}"></script>

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#tbl_equipos').DataTable();
            responsive: true
        });
    </script>
@stop
