<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Equipo extends Model
{
    use HasFactory;

    protected $table = 'tipo_equipos';
    protected $primaryKey = 'id_tipo_equipo';

    // public $timestamps = false;

    protected $fillable = [
        'nombre_tipo_equipo',
        'estatus_tipo_equipo',
    ];
}
