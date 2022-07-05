<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredientes = [
            [
                'nombre' => 'Queso',
                'created_at' => now(),
            ],
            [
                'nombre' => 'Peperoni',
                'created_at' => now(),
            ],
            [
                'nombre' => 'Piña',
                'created_at' => now(),
            ],
            [
                'nombre' => 'Chorizo',
                'created_at' => now(),
            ],
            [
                'nombre' => 'Jamón',
                'created_at' => now(),
            ],
            [
                'nombre' => 'Anchoas',
                'created_at' => now(),
            ],
            [
                'nombre' => 'Carne molida',
                'created_at' => now(),
            ],
        ];

        DB::table('ingrediente')->insert($ingredientes);
    }
}
