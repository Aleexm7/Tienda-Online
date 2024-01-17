<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = [
            [
                'product_name' => 'Camisa de manga larga',
                'description' => 'Camisa elegante de algodón para hombres',
                'price' => 39.99,
                'stock' => 50,
            ],
            [
                'product_name' => 'Vestido floral',
                'description' => 'Vestido de verano con estampado floral',
                'price' => 49.99,
                'stock' => 30,
            ],
            [
                'product_name' => 'Jeans ajustados',
                'description' => 'Jeans de mezclilla elástica para mujeres',
                'price' => 59.99,
                'stock' => 40,
            ],
            [
                'product_name' => 'Chaqueta de cuero',
                'description' => 'Chaqueta de cuero genuino para hombres',
                'price' => 129.99,
                'stock' => 20,
            ],
            [
                'product_name' => 'Blusa sin hombros',
                'description' => 'Blusa elegante con diseño sin hombros',
                'price' => 34.99,
                'stock' => 25,
            ],
            [
                'product_name' => 'Zapatillas deportivas',
                'description' => 'Zapatillas deportivas para correr',
                'price' => 79.99,
                'stock' => 35,
            ],
            [
                'product_name' => 'Sombrero de paja',
                'description' => 'Sombrero de paja con banda decorativa',
                'price' => 19.99,
                'stock' => 60,
            ],
            [
                'product_name' => 'Pantalones cortos de playa',
                'description' => 'Pantalones cortos de playa para hombres',
                'price' => 29.99,
                'stock' => 45,
            ],
            [
                'product_name' => 'Vestido de noche elegante',
                'description' => 'Vestido de noche largo y elegante',
                'price' => 89.99,
                'stock' => 15,
            ],
            [
                'product_name' => 'Sudadera con capucha',
                'description' => 'Sudadera con capucha y bolsillos',
                'price' => 44.99,
                'stock' => 55,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }

        
        //Seeder para usuarios

        $users = [
            [
                'name' => 'Juan Perez',
                'email' => 'juan@example.com',
                'password' => Hash::make('password123'),
                'user_role' => 'customer',
            ],
            [
                'name' => 'Maria Rodriguez',
                'email' => 'maria@example.com',
                'password' => Hash::make('password456'),
                'user_role' => 'admin',
            ],
            [
                'name' => 'Carlos Gomez',
                'email' => 'carlos@example.com',
                'password' => Hash::make('password789'),
                'user_role' => 'customer',
            ],
            // ... Continúa agregando más ejemplos según sea necesario
            [
                'name' => 'Laura Hernandez',
                'email' => 'laura@example.com',
                'password' => Hash::make('passwordabc'),
                'user_role' => 'customer',
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }

    }
}
