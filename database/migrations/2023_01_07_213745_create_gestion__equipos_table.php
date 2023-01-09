<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // 'id_tipo_area',
        // 'id_tipo_equipo',
        // 'id_usuario',
        // 'cantidad_ram',
        // 'procesador',
        // 'cantidad_disco_duro',
        // 'software_instalado',
        // 'bandera_reasignacion_area',
        // 'bandera_reasignacion_usuario',
        // 'estatus_gestion_equipo',

        Schema::create('gestion_equipos', function (Blueprint $table) {
            $table->id('id_gestion_equipo')->increments();
            $table->integer('numero_inventario');
            $table->integer('numero_serie');
            $table->string('marca', 75);
            $table->string('modelo', 75);
            $table->date('fecha_compra', 75)->date_format('Y:m:d h:m:s');
            $table->string('provedor', 75);
            $table->string('costo', 75);

            $table->string('cantidad_ram', 75);
            $table->string('procesador', 75);
            $table->string('cantidad_disco_duro', 75);
            $table->text('software_instalado');

            $table->unsignedBigInteger('id_area');
            $table->unsignedBigInteger('id_tipo_equipo');
            $table->unsignedBigInteger('id_usuario');

            $table->integer('bandera_reasignacion_area');
            $table->integer('bandera_reasignacion_usuario');
            
            $table->integer('estatus_gestion_equipo')->default(1);

            $table->foreign('id_area')->references('id_area')->on('areas')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_tipo_equipo')->references('id_tipo_equipo')->on('tipo_equipos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestion__equipos');
    }
};
