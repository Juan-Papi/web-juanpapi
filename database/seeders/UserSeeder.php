<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Cliente;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            //nro 1
            [
                'name' => 'Juan Pablo Rodriguez',
                'email' => 'pablojuan123sc@gmail.com',
                'password' => bcrypt('87654321')
            ],
            //nro 2
            [
                'name' => 'Jhoel Ibarra',
                'email' => 'jhoel123@gmail.com',
                'password' => bcrypt('password123')
            ],
            //nro 3
            [
                'name' => 'Jhonn Montoya',
                'email' => 'montoya@gmail.com',
                'password' => bcrypt('password123')
            ],
            //nro 4
            [
                'name' => 'Carlos Ibañez',
                'email' => 'carlos123@gmail.com',
                'password' => bcrypt('password123')
            ],
            //nro 5
            [
                'name' => 'Marty Medrano',
                'email' => 'marty123@gmail.com',
                'password' => bcrypt('password123')
            ],
            //nro 6
            [
                'name' => 'Alvaro Machuca',
                'email' => 'alvaro123@gmail.com',
                'password' => bcrypt('password123')
            ],
           //nro 7
            [
                'name' => 'María González',
                'email' => 'maria@hotmail.com',
                'password' => bcrypt('password123')
            ],
           
        ];
    
        foreach ($usuarios as $usuario) {
            User::create($usuario);
        }
      /*  $usuario = User::create([
            'name' => 'Nombre del usuario',
            'email' => 'correo@ejemplo.com',
            'password' => bcrypt('contraseña'),
        ]);

        // Crear un cliente relacionado con el usuario
        $cliente = new Cliente([
            'nombre' => 'Nombre del cliente',
            'apellido' => 'Apellido del cliente',
            'email' => 'correo@cliente.com',
            'nro_telefono' => 123456789,
            'fecha_nacimiento' => '1990-01-01',
            'fecha_registro' => '2023-05-14',
            'genero' => 'M',
            'tipo' => 'Normal',
        ]);
        $usuario->clientes()->save($cliente);
*/
        
    }
}
