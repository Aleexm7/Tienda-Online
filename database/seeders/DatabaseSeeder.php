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
                'name' => 'Camiseta verde origins',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasBasicas1.webp',
                'category' => 'Camisetas básicas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta marshmallow origins',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasBasicas2.webp',
                'category' => 'Camisetas básicas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta azul marino origins',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasBasicas3.webp',
                'category' => 'Camisetas básicas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta ash origins',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasBasicas5.webp',
                'category' => 'Camisetas básicas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta tirantes básicas x2 negra',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasBasicas6.webp',
                'category' => 'Camisetas básicas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta tirantes básicas x2 khaki/verde',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasBasicas7.webp',
                'category' => 'Camisetas básicas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta tirantes básicas x2 naranja/lima',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasBasicas8.webp',
                'category' => 'Camisetas básicas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta boxy fit ash',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasCropped1.webp',
                'category' => 'Camisetas cropped',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta lilac cropped bacano',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasCropped2.webp',
                'category' => 'Camisetas cropped',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta blanca cropped frist class',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasCropped3.webp',
                'category' => 'Camisetas croppeds',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta ash cropped costa',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasCropped4.webp',
                'category' => 'Camisetas cropped',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta blanca cropped bacano',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasCropped5.webp',
                'category' => 'Camisetas cropped',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta blanca cropped costa',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetasCropped6.webp',
                'category' => 'Camisetas cropped',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta azul virginity',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetas1.webp',
                'category' => 'Camisetas estampadas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta verde locally hated',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetas2.webp',
                'category' => 'Camisetas estampadas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta azul marino locally hated',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetas3.webp',
                'category' => 'Camisetas estampadas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta blanca locally hated',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetas4.webp',
                'category' => 'Camisetas estampadas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta ash first class',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetas5.webp',
                'category' => 'Camisetas estampadas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta negra sherry',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetas6.webp',
                'category' => 'Camisetas estampadas',
                'size' => 'XL',
            ],
            [
                'name' => 'Camiseta off-white summer tour',
                'price' => 40,
                'stock' => 55,
                'image' => 'camisetas7.webp',
                'category' => 'Camisetas estampadas',
                'size' => 'XL',
            ],
            [
                'name' => 'Pantalón vaquero azul',
                'price' => 40,
                'stock' => 55,
                'image' => 'pantalonesVaquero1.webp',
                'category' => 'Pantalones vaquero',
                'size' => 'XL',
            ],
            [
                'name' => 'Pantalón vaquero azul washed',
                'price' => 40,
                'stock' => 55,
                'image' => 'pantalonesVaquero2.webp',
                'category' => 'Pantalones vaquero',
                'size' => 'XL',
            ],
            [
                'name' => 'Pantalón vaquero negro',
                'price' => 40,
                'stock' => 55,
                'image' => 'pantalonesVaquero3.webp',
                'category' => 'Pantalones vaquero',
                'size' => 'XL',
            ],
            [
                'name' => 'Pantalón vaquero raw',
                'price' => 40,
                'stock' => 55,
                'image' => 'pantalonesVaquero4.webp',
                'category' => 'Pantalones vaquero',
                'size' => 'XL',
            ],
            [
                'name' => 'Pantalón vaquero trademark',
                'price' => 40,
                'stock' => 55,
                'image' => 'pantalonesVaquero5.webp',
                'category' => 'Pantalones vaquero',
                'size' => 'XL',
            ],
            [
                'name' => 'Pantalón baggy azul old',
                'price' => 40,
                'stock' => 55,
                'image' => 'pantalonesBaggy2.webp',
                'category' => 'Pantalones baggy',
                'size' => 'XL',
            ],
            [
                'name' => 'Pantalón baggy sand dust old',
                'price' => 40,
                'stock' => 55,
                'image' => 'pantalonesBaggy1.webp',
                'category' => 'Pantalones baggy',
                'size' => 'XL',
            ],
            [
                'name' => 'Pantalón cargo ash army',
                'price' => 40,
                'stock' => 55,
                'image' => 'pantalonesCargo1.webp',
                'category' => 'Pantalones cargo',
                'size' => 'XL',
            ],
            [
                'name' => 'Pantalón cargo verde army',
                'price' => 40,
                'stock' => 55,
                'image' => 'pantalonesCargo2.webp',
                'category' => 'Pantalones cargo',
                'size' => 'XL',
            ],
            [
                'name' => 'Pantalón cargo verde oscuro',
                'price' => 40,
                'stock' => 55,
                'image' => 'pantalonesCargo2.webp',
                'category' => 'Pantalones cargo',
                'size' => 'XL',
            ],
            [
                'name' => '"LA "Bomber jacket',
                'price' => 40,
                'stock' => 55,
                'image' => 'chaquetas1.webp',
                'category' => 'Chaquetas',
                'size' => 'XL',
            ],
            [
                'name' => 'Jewel zip up jacket',
                'price' => 40,
                'stock' => 55,
                'image' => 'chaquetas2.webp',
                'category' => 'Chaquetas',
                'size' => 'XL',
            ],
            [
                'name' => 'Carpenter jacket brown',
                'price' => 40,
                'stock' => 55,
                'image' => 'chaquetas3.webp',
                'category' => 'Chaquetas',
                'size' => 'XL',
            ],
            [
                'name' => 'Soft shell boxy jacket beige',
                'price' => 40,
                'stock' => 55,
                'image' => 'chaquetas4.webp',
                'category' => 'Chaquetas',
                'size' => 'XL',
            ],
            [
                'name' => 'Trademark denim jacket',
                'price' => 40,
                'stock' => 55,
                'image' => 'chaquetas5.webp',
                'category' => 'Chaquetas',
                'size' => 'XL',
            ],
            [
                'name' => 'Soft shell boxy jacket neon',
                'price' => 40,
                'stock' => 55,
                'image' => 'chaquetas6.webp',
                'category' => 'Chaquetas',
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
