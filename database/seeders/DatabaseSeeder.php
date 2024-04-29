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
                'name' => 'Camisa de manga larga',
                'price' => 39.99,
                'stock' => 50,
                'image' => 'camisa.jpg',
                'category' => 'Ropa',
                'size' => 'L',
            ],
            [
                'name' => 'Vestido floral',
                'price' => 49.99,
                'stock' => 30,
                'image' => 'vestido.jpg',
                'category' => 'Ropa',
                'size' => 'M',
            ],
            [
                'name' => 'Jeans ajustados',
                'price' => 59.99,
                'stock' => 40,
                'image' => 'jeans.jpg',
                'category' => 'Ropa',
                'size' => 'S',
            ],
            [
                'name' => 'Chaqueta de cuero',
                'price' => 129.99,
                'stock' => 20,
                'image' => 'chaqueta.jpg',
                'category' => 'Ropa',
                'size' => 'XL',
            ],
            [
                'name' => 'Blusa sin hombros',
                'price' => 34.99,
                'stock' => 25,
                'image' => 'blusa.jpg',
                'category' => 'Ropa',
                'size' => 'S',
            ],
            [
                'name' => 'Zapatillas deportivas',
                'price' => 79.99,
                'stock' => 35,
                'image' => 'zapatillas.jpg',
                'category' => 'Calzado',
                'size' => '40',
            ],
            [
                'name' => 'Sombrero de paja',
                'price' => 19.99,
                'stock' => 60,
                'image' => 'sombrero.jpg',
                'category' => 'Accesorios',
                'size' => 'Única',
            ],
            [
                'name' => 'Pantalones cortos de playa',
                'price' => 29.99,
                'stock' => 45,
                'image' => 'pantalones.jpg',
                'category' => 'Ropa',
                'size' => 'M',
            ],
            [
                'name' => 'Vestido de noche elegante',
                'price' => 89.99,
                'stock' => 15,
                'image' => 'vestido_noche.jpg',
                'category' => 'Ropa',
                'size' => 'L',
            ],
            [
                'name' => 'Sudadera con capucha',
                'price' => 44.99,
                'stock' => 55,
                'image' => 'sudadera.jpg',
                'category' => 'Ropa',
                'size' => 'XL',
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
