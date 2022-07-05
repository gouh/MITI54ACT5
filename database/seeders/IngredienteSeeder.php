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
            ['nombre' => 'Queso'],
            ['nombre' => 'Peperoni'],
            ['nombre' => 'Piña'],
            ['nombre' => 'Chorizo'],
            ['nombre' => 'Jamón'],
            ['nombre' => 'Anchoas'],
            ['nombre' => 'Carne molida'],
        ];

        DB::table('ingrediente')->insert($ingredientes);
    }
}
