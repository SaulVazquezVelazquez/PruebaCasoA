<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gestion_Equipo>
 */
class GestionEquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // 'numero_inventario',
        // 'numero_serie',
        // 'marca',
        // 'modelo',
        // 'fecha_compra',
        // 'provedor',
        // 'costo',
        // 'id_area',
        // 'id_tipo_equipo',
        // 'id',
        // 'cantidad_ram',
        // 'procesador',
        // 'cantidad_disco_duro',
        // 'software_instalado',
        // 'bandera_reasignacion_area',
        // 'bandera_reasignacion_usuario',
        // 'estatus_gestion_equipo',

        return [
            // 'numero_inventario' => fake()->unique()->numerify(),
            // 'numero_serie' => fake()->unique()->numerify(),
            // 'marca' => fake()->randomElement(['DELL','HUAWEI','LG','SAMSMG','PRINT TWO']),
            // 'modelo' => fake()->randomKey(),
            // 'fecha_compra' => fake()->dateTimeBetween($startDate = '-20 years' , $endDate = 'now'),
            // 'provedor' => fake()->randomDigit(),
            // 'costo' => fake()->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            // 'id_area' => fake()->random_int(1 , 4),
            // 'id_tipo_equipo' => fake()->random_int(1 , 4),
            // 'id_usuario' => fake()->random_int(1 , 20),
        ];
    }
}
