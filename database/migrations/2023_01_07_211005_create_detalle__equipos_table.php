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

        // 'cantidad_ram',
        // 'procesador',
        // 'cantidad_disco_duro',
        // 'software_instalado',
        Schema::create('detalle_equipos', function (Blueprint $table) {
            $table->id('id_detalle_equipo')->increments();
            $table->string('cantidad_ram', 75);
            $table->string('procesador', 75);
            $table->string('cantidad_disco_duro', 75);
            $table->text('software_instalado');
            $table->integer('estatus_detalle_equipo')->default(1);
            $table->unsignedBigInteger('id_tipo_equipo');
            $table->timestamps();

            $table->foreign('id_tipo_equipo')->references('id_tipo_equipo')->on('tipo_equipos')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_equipos');
    }
};
