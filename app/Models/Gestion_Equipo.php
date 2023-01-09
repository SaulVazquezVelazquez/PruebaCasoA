<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestion_Equipo extends Model
{
    use HasFactory;
    
    protected $table = 'gestion_equipos';
    protected $primaryKey = 'id_gestion_equipo';

    // public $timestamps = false;

    protected $fillable = [
        'numero_inventario',
        'numero_serie',
        'marca',
        'modelo',
        'fecha_compra',
        'provedor',
        'costo',
        'id_area',
        'id_tipo_equipo',
        'id_usuario',
        'cantidad_ram',
        'procesador',
        'cantidad_disco_duro',
        'software_instalado',
        'bandera_reasignacion_area',
        'bandera_reasignacion_usuario',
        'estatus_gestion_equipo',
    ];
}
