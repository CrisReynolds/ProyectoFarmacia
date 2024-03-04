<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\Transaccion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(25)->create();
        // Cliente::factory(20)->create();
        // Categoria::factory(25)->create();
        // Producto::factory(10)->create();
        // Venta::factory(20)->create();
        // Transaccion::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'nombre'=>'Cristian',
            'apellido'=>'Perez',
            'username'=>'admin',
            'password'=>'admin123',
            'imagen'=>'123456.jpg',
            'email'=>'admin@gmail.com'
        ]);
        User::create([
            'nombre'=>'User',
            'apellido'=>'Test',
            'username'=>'user',
            'password'=>'user123',
            'imagen'=>'123456.jpg',
            'email'=>'user@gmail.com'
        ]);
        User::create([
            'nombre'=>'Miguel',
            'apellido'=>'Suarez',
            'username'=>'miguel',
            'password'=>'miguel123',
            'imagen'=>'123456.jpg',
            'email'=>'msuarez@gmail.com'
        ]);
        Categoria::create([
            'tipo'=>'analgesico'
        ]);
        Categoria::create([
            'tipo'=>'antiacido'
        ]);
        Categoria::create([
            'tipo'=>'laxante'
        ]);
        Categoria::create([
            'tipo'=>'antiinflamatorio'
        ]);
        Categoria::create([
            'tipo'=>'antitusivos'
        ]);
        Producto::create([
            'descripcion'=>'Aspirina',
            'imagen'=>'test.jpg',
            'cantidad_minima'=>'5',
            'stock'=>'15',
            'precio_compra'=>'30',
            'precio_venta'=>'50',
            'categoria_id'=>'1'
        ]);
        Producto::create([
            'descripcion'=>'Tums',
            'imagen'=>'test.jpg',
            'cantidad_minima'=>'5',
            'stock'=>'15',
            'precio_compra'=>'40',
            'precio_venta'=>'50',
            'categoria_id'=>'2'
        ]);
        Producto::create([
            'descripcion'=>'Dulcolax',
            'imagen'=>'test.jpg',
            'cantidad_minima'=>'10',
            'stock'=>'50',
            'precio_compra'=>'50',
            'precio_venta'=>'65',
            'categoria_id'=>'3'
        ]);
    }
}
