<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Equipo extends Model
{
    use HasFactory;

    protected $table = 'detalle_equipo';
    protected $primaryKey = 'id_detalle_equipo';
    protected $foreingKey = 'id_tipo_equipo';


    // public $timestamps = false;

    protected int $fillable = [
        
        'cantidad_ram',
        'procesador',
        'cantidad_disco_duro',
        'software_instalado',
        'estatus_detalle_equipo',
    ];
}
