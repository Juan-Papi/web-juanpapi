<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rolSeeder extends Seeder
{
    /**phh
     * Run the database seeds.
     */
    public function run(): void
    {
        $rols = [
            [ 'nombre' => 'contafor' ],
            [ 'nombre' => 'administrador'],
            [ 'nombre' => 'vendedor'],
            [ 'nombre' => 'trabajador']
        ];
        foreach ($rols as $rol) {

            Rol::create($rol);
        }

        
    }
}
