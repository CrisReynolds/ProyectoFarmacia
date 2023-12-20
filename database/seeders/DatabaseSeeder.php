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
        Cliente::factory(20)->create();
        Venta::factory(10)->create();
        Transaccion::factory(10)->create();
        // Producto::factory(10)->create();
        // User::factory(15)->create();
        // Categoria::factory(15)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'nombre'=>'Joel',
        //     'apellido'=>'Gonzales',
        //     'username'=>'admin',
        //     'password'=>'admin123',
        //     'imagen'=>'123456.jpg',
        //     'email'=>'admin@gmail.com'
        // ]);
        // User::create([
        //     'nombre'=>'User',
        //     'apellido'=>'Test',
        //     'username'=>'user',
        //     'password'=>'user123',
        //     'imagen'=>'123456.jpg',
        //     'email'=>'user@gmail.com'
        // ]);
        // User::create([
        //     'nombre'=>'Miguel',
        //     'apellido'=>'Suarez',
        //     'username'=>'miguel',
        //     'password'=>'miguel123',
        //     'imagen'=>'123456.jpg',
        //     'email'=>'msuarez@gmail.com'
        // ]);
        // Categoria::create([
        //     'tipo'=>'camisa'
        // ]);
        // Categoria::create([
        //     'tipo'=>'pantalon'
        // ]);
        // Categoria::create([
        //     'tipo'=>'saco'
        // ]);
    }
}
