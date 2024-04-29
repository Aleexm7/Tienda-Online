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
                'name' => 'Sudadera gris not a fan',
                'price' => 70,
                'stock' => 50,
                'image' => 'sudadera1.webp',
                'category' => 'Sudaderas',
                'size' => 'L',
            ],
            [
                'name' => 'Sudadera azul marino not a fan',
                'price' => 70,
                'stock' => 30,
                'image' => 'sudadera2.webp',
                'category' => 'Sudaderas',
                'size' => 'M',
            ],
            [
                'name' => 'Sudadera ash sherry',
                'price' => 70,
                'stock' => 40,
                'image' => 'sudadera3.webp',
                'category' => 'Sudaderas',
                'size' => 'S',
            ],
            [
                'name' => 'Sudadera negra sherry',
                'price' => 70,
                'stock' => 20,
                'image' => 'sudadera4.webp',
                'category' => 'Sudaderas',
                'size' => 'XL',
            ],
            [
                'name' => 'Sudadera boxy azul kory',
                'price' => 70,
                'stock' => 25,
                'image' => 'sudadera5.webp',
                'category' => 'Sudaderas',
                'size' => 'S',
            ],
            [
                'name' => 'Sudadera boxy ash kory',
                'price' => 70,
                'stock' => 35,
                'image' => 'sudadera6.webp',
                'category' => 'Sudaderas',
                'size' => '40',
            ],
            [
                'name' => 'Sudadera boxy azul',
                'price' => 70,
                'stock' => 60,
                'image' => 'sudadera7.webp',
                'category' => 'Sudaderas',
                'size' => 'Única',
            ],
            [
                'name' => 'Sudadera boxy ice grey',
                'price' => 70,
                'stock' => 45,
                'image' => 'sudadera8.webp',
                'category' => 'Sudaderas',
                'size' => 'M',
            ],
            [
                'name' => 'Balear crewneck off-white',
                'price' => 70,
                'stock' => 15,
                'image' => 'sudaderaSinCapucha1.webp',
                'category' => 'Sudaderas Sin Capucha',
                'size' => 'L',
            ],
            [
                'name' => 'Balear crewneck pale blue',
                'price' => 70,
                'stock' => 55,
                'image' => 'sudaderaSinCapucha2.webp',
                'category' => 'Sudaderas Sin Capucha',
                'size' => 'XL',
            ],
            [
                'name' => 'Overdyed crewneck green',
                'price' => 70,
                'stock' => 55,
                'image' => 'sudaderaSinCapucha3.webp',
                'category' => 'Sudaderas Sin Capucha',
                'size' => 'XL',
            ],
            [
                'name' => 'Lil boat crewneck navy',
                'price' => 70,
                'stock' => 55,
                'image' => 'sudaderaSinCapucha4.webp',
                'category' => 'Sudaderas Sin Capucha',
                'size' => 'XL',
            ],
            [
                'name' => 'Volcanic crewneck black',
                'price' => 70,
                'stock' => 55,
                'image' => 'sudaderaSinCapucha5.webp',
                'category' => 'Sudaderas Sin Capucha',
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
