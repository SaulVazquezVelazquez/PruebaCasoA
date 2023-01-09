@extends('adminlte::page')

@section('content')

    <div class="card">
        <div class="card-body">
            <form class="row g-3" action="/gestion_equipo" method="post">
                <div class="col-6">
                    <label for="" class="form-label">Numero de Serie</label>
                    <input type="text" class="form-control" name="numero_serie" id="numero_serie">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Marca</label>
                    <input type="text" class="form-control" name="marca" id="marca">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Fecha Compra</label>
                    <input type="text" class="form-control" name="fecha_compra" id="fecha_compra">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Provedor</label>
                    <input type="text" class="form-control" name="provedor" id="provedor">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Costo</label>
                    <input type="text" class="form-control" name="costo" id="costo">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Tipo Equipo</label>
                    <select name="id_tipo_equipo" id="id_tipo_equipo" class="form-control" required>
                        <option selected>-</option>
                        @foreach ($tipo_equipo as $tipo_equip)
                        <option>{{ $tipo_equip->nombre_tipo_equipo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Area</label>
                    <select name="id_area" id="id_area" class="form-control">
                        <option selected>-</option>
                        @foreach ($areas as $area)
                        <option>{{ $area->nombre_area }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Usuario</label>
                    <select class="form-control" name="id_usuario" id="id_usuario">
                        <option selected>-</option>
                        @foreach ($users as $user)
                        <option>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                

                <div class="col-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </div>
            </form>


        </div>

    </div>


@stop

@section('js')
    {{-- <script src="../../../public/vendor/js/config_create_gestion.js"></script> --}}
    <script src="{{ asset('vendor/js/config_create_gestion.js') }}"></script>

    <script>
        console.log('Hi! Gestion Equipos');
    </script>
@stop
