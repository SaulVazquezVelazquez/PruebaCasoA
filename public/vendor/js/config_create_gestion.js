console.log("Success");

$("#btn_modal").on("click", vaciar );

function vaciar() {
    // $("#formEquipoNuevo").attr("action","#");
    // $("#formEquipoNuevo").attr("method","");

    $("#formEquipoNuevo")[0].reset();
    $("#exampleModalLabel").text("Registrar Nuevo");
    $("#formEquipoNuevo").attr("hidden",false);
    $("#formEquipoUpdate").attr("hidden",true);
    $("#id_cantidad_ram").prop('hidden' , true);
    $("#id_procesador").prop('hidden' , true);
    $("#id_cantidad_disco_duro").prop('hidden' , true);
    $("#id_software_instalado").prop('hidden' , true);

    // $("#formEquipoNuevo").attr("action","{{route('gestion_equipo.inicio.store')}}");
    // $("#formEquipoNuevo").attr("method","POST");
    
}
function mostrarInputs(params) {
    try {
        let tipo_equipo = $("#id_tipo_equipo").val();

        if (tipo_equipo == '4' || tipo_equipo == 4) {
            $("#id_cantidad_ram").prop('hidden' , false);
            $("#id_procesador").prop('hidden' , false);
            $("#id_cantidad_disco_duro").prop('hidden' , false);
            $("#id_software_instalado").prop('hidden' , false);
        } else {
            $("#id_cantidad_ram").prop('hidden' , true);
            $("#id_procesador").prop('hidden' , true);
            $("#id_cantidad_disco_duro").prop('hidden' , true);
            $("#id_software_instalado").prop('hidden' , true);
        }

    } catch (error) {
        console.log("Ocurrio un error : " , error);
    }
    
}


function editarRegistro(event, gestion_equipo) {
    
    try {
        event.preventDefault();
        // $("#formEquipoNuevo").attr("action","#");
        // $("#formEquipoNuevo").attr("method","");

        let gestion_equipo_arr = Object.values(gestion_equipo);

        console.log(gestion_equipo_arr);

        $("#numero_inventario").val(gestion_equipo_arr[1]);
        $("#numero_serie").val(gestion_equipo_arr[2]);
        $("#marca").val(gestion_equipo_arr[3]);
        $("#modelo").val(gestion_equipo_arr[4]);
        $("#fecha_compra").val(gestion_equipo_arr[5]);
        $("#provedor").val(gestion_equipo_arr[6]);
        $("#costo").val(gestion_equipo_arr[7]);

        if (gestion_equipo_arr[13] == '4' || gestion_equipo_arr[13] == 4) {
            $("#id_cantidad_ram").prop('hidden' , false);
            $("#id_procesador").prop('hidden' , false);
            $("#id_cantidad_disco_duro").prop('hidden' , false);
            $("#id_software_instalado").prop('hidden' , false);
        } else {
            $("#id_cantidad_ram").prop('hidden' , true);
            $("#id_procesador").prop('hidden' , true);
            $("#id_cantidad_disco_duro").prop('hidden' , true);
            $("#id_software_instalado").prop('hidden' , true);
        }
        $("#id_tipo_equipo").val(gestion_equipo_arr[13]);
        $("#cantidad_ram").val(gestion_equipo_arr[8]);
        $("#procesador").val(gestion_equipo_arr[9]);
        $("#cantidad_disco_duro").val(gestion_equipo_arr[10]);
        $("#software_instalado").val(gestion_equipo_arr[11]);
        $("#id_area").val(gestion_equipo_arr[12]);
        $("#id_usuario").val(gestion_equipo_arr[14]);

        // $("#formEquipoNuevo").attr("method","PUT");
        $("#exampleModalLabel").text("Editar Registro"); 
        // $("#formEquipoNuevo").attr("action","{{route('gestion_equipo.inicio.update',"+gestion_equipo+")}}");
        // $("#formEquipoNuevo").attr("action",`{{route('gestion_equipo.inicio.update' , ${gestion_equipo})}}`);
        

    } catch (error) {
        console.log("Ocurrio un error : " , error);
    }
    

    // let data = {
    //     data_form : data_form,
    //     action : 'save_equipo',
    // };

    // $.ajax({
    //     type: "POST",
    //     // url: "/gestion_equipo@saveEquipo",
    //     // url: "{{ route('gestion_equipo.inicio.saveEquipo') }}",
    //     url: "{{ route('gestion_equipo.inicio.store') }}",
    //     data: data,
    //     success: function (response) {
    //         console.log(response);
    //     },
    //     error:function (data) {
    //         console.log('Error : ',data);
    //     }
    // });
    
}