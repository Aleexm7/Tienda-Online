<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Size;
use App\Models\Product;
use App\Models\ProductSize;

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
                'price' => 50,
                'image' => 'sudadera1.webp',
                'category' => 'Sudaderas',
                'total_stock' => 200,
                'section' => 'men'
            ],
            [
                'name' => 'Sudadera azul marino not a fan',
                'price' => 50,
                'image' => 'sudadera2.webp',
                'category' => 'Sudaderas',
                'total_stock' => 200,
                'section' => 'men'
            ],
            [
                'name' => 'Sudadera ash sherry',
                'price' => 50,
                'image' => 'sudadera3.webp',
                'category' => 'Sudaderas',
                'total_stock' => 200,
                'section' => 'men',

            ],
            [
                'name' => 'Sudadera negra sherry',
                'price' => 50,
                'image' => 'sudadera4.webp',
                'category' => 'Sudaderas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Sudadera boxy azul kory',
                'price' => 50,
                'image' => 'sudadera5.webp',
                'category' => 'Sudaderas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Sudadera boxy ash kory',
                'price' => 50,
                'image' => 'sudadera6.webp',
                'category' => 'Sudaderas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Sudadera boxy azul',
                'price' => 50,
                'image' => 'sudadera7.webp',
                'category' => 'Sudaderas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Sudadera boxy ice grey',
                'price' => 50,
                'image' => 'sudadera8.webp',
                'category' => 'Sudaderas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Balear crewneck off-white',
                'price' => 50,
                'image' => 'sudaderaSinCapucha1.webp',
                'category' => 'Sudaderas sin capucha',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Balear crewneck pale blue',
                'price' => 50,
                'image' => 'sudaderaSinCapucha2.webp',
                'category' => 'Sudaderas sin capucha',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Overdyed crewneck green',
                'price' => 50,
                'image' => 'sudaderaSinCapucha3.webp',
                'category' => 'Sudaderas sin capucha',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Lil boat crewneck navy',
                'price' => 50,
                'image' => 'sudaderaSinCapucha4.webp',
                'category' => 'Sudaderas sin capucha',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta verde origins',
                'price' => 40,
                'image' => 'camisetasBasicas1.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta marshmallow origins',
                'price' => 40,
                'image' => 'camisetasBasicas2.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta azul marino origins',
                'price' => 40,
                'image' => 'camisetasBasicas3.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta ash origins',
                'price' => 40,
                'image' => 'camisetasBasicas5.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta tirantes básicas x2 negra',
                'price' => 40,
                'image' => 'camisetasBasicas6.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta tirantes básicas x2 khaki/verde',
                'price' => 40,
                'image' => 'camisetasBasicas7.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta tirantes básicas x2 naranja/lima',
                'price' => 40,
                'image' => 'camisetasBasicas8.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta boxy fit ash',
                'price' => 40,
                'image' => 'camisetasCropped1.webp',
                'category' => 'Camisetas cropped',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta lilac cropped bacano',
                'price' => 40,
                'image' => 'camisetasCropped2.webp',
                'category' => 'Camisetas cropped',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta blanca cropped frist class',
                'price' => 40,
                'image' => 'camisetasCropped3.webp',
                'category' => 'Camisetas cropped',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta ash cropped costa',
                'price' => 40,
                'image' => 'camisetasCropped4.webp',
                'category' => 'Camisetas cropped',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta blanca cropped bacano',
                'price' => 40,
                'image' => 'camisetasCropped5.webp',
                'category' => 'Camisetas cropped',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta blanca cropped costa',
                'price' => 40,
                'image' => 'camisetasCropped6.webp',
                'category' => 'Camisetas cropped',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta azul virginity',
                'price' => 40,
                'image' => 'camisetas1.webp',
                'category' => 'Camisetas estampadas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta verde locally hated',
                'price' => 40,
                'image' => 'camisetas2.webp',
                'category' => 'Camisetas estampadas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta azul marino locally hated',
                'price' => 40,
                'image' => 'camisetas3.webp',
                'category' => 'Camisetas estampadas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta blanca locally hated',
                'price' => 40,
                'image' => 'camisetas4.webp',
                'category' => 'Camisetas estampadas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta ash first class',
                'price' => 40,
                'image' => 'camisetas5.webp',
                'category' => 'Camisetas estampadas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta negra sherry',
                'price' => 40,
                'image' => 'camisetas6.webp',
                'category' => 'Camisetas estampadas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Camiseta off-white summer tour',
                'price' => 40,
                'image' => 'camisetas7.webp',
                'category' => 'Camisetas estampadas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Pantalón vaquero azul',
                'price' => 60,
                'image' => 'pantalonesVaquero1.webp',
                'category' => 'Pantalones vaquero',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Pantalón vaquero azul washed',
                'price' => 60,
                'image' => 'pantalonesVaquero2.webp',
                'category' => 'Pantalones vaquero',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Pantalón vaquero negro',
                'price' => 60,
                'image' => 'pantalonesVaquero3.webp',
                'category' => 'Pantalones vaquero',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Pantalón vaquero raw',
                'price' => 60,
                'image' => 'pantalonesVaquero4.webp',
                'category' => 'Pantalones vaquero',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Pantalón vaquero trademark',
                'price' => 60,
                'image' => 'pantalonesVaquero5.webp',
                'category' => 'Pantalones vaquero',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Pantalón baggy azul old',
                'price' => 60,
                'image' => 'pantalonesBaggy2.webp',
                'category' => 'Pantalones baggy',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Pantalón baggy sand dust old',
                'price' => 60,
                'image' => 'pantalonesBaggy1.webp',
                'category' => 'Pantalones baggy',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Pantalón cargo ash army',
                'price' => 60,
                'image' => 'pantalonesCargo1.webp',
                'category' => 'Pantalones cargo',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Pantalón cargo verde army',
                'price' => 60,
                'image' => 'pantalonesCargo2.webp',
                'category' => 'Pantalones cargo',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Pantalón cargo verde oscuro',
                'price' => 60,
                'image' => 'pantalonesCargo2.webp',
                'category' => 'Pantalones cargo',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => '"LA "Bomber jacket',
                'price' => 80,
                'image' => 'chaquetas1.webp',
                'category' => 'Chaquetas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Jewel zip up jacket',
                'price' => 80,
                'image' => 'chaquetas2.webp',
                'category' => 'Chaquetas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Carpenter jacket brown',
                'price' => 80,
                'image' => 'chaquetas3.webp',
                'category' => 'Chaquetas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Soft shell boxy jacket beige',
                'price' => 80,
                'image' => 'chaquetas4.webp',
                'category' => 'Chaquetas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Trademark denim jacket',
                'price' => 80,
                'image' => 'chaquetas5.webp',
                'category' => 'Chaquetas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Soft shell boxy jacket neon',
                'price' => 80,
                'image' => 'chaquetas6.webp',
                'category' => 'Chaquetas',
                'total_stock' => 200,
                'section' => 'men',
            ],
            [
                'name' => 'Liberté top white',
                'price' => 34,
                'image' => 'camiseta1.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Liberté top navy',
                'price' => 34,
                'image' => 'camiseta2.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Hot top off-white',
                'price' => 34,
                'image' => 'camiseta3.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Hot top navy',
                'price' => 34,
                'image' => 'camiseta4.webp',
                'category' => 'Camisetas basicas',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Ying yang beige pants',
                'price' => 50,
                'image' => 'pantalone1.webp',
                'category' => 'Pantalones largo',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Peace chekered pants',
                'price' => 50,
                'image' => 'pantalone2.webp',
                'category' => 'Pantalones largo',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Pantalón corto baggy azul denim',
                'price' => 45,
                'image' => 'pantaloneCorto2.webp',
                'category' => 'Pantalones corto',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Pantalón corto baggy azul claro',
                'price' => 45,
                'image' => 'pantaloneCorto1.webp',
                'category' => 'Pantalones corto',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Vestido midi tirantes calados',
                'price' => 35,
                'image' => 'vestido2.jpg',
                'category' => 'Vestido largo',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Vestido midi satén detalle blonda',
                'price' => 35,
                'image' => 'vestido1.jpg',
                'category' => 'Vestido largo',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Vestido midi demin',
                'price' => 30,
                'image' => 'vestidoCorto1.jpg',
                'category' => 'Vestido corto',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Vestido midi rústico volantes',
                'price' => 30,
                'image' => 'vestidoCorto2.jpg',
                'category' => 'Vestido corto',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Sandalias tacón plataforma tachas ',
                'price' => 40,
                'image' => 'zapato4.jpg',
                'category' => ' zapatos',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Sandalias plataforma hebillas ',
                'price' => 40,
                'image' => 'zapato2.jpg',
                'category' => 'zapatos',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Sandalias planas pulsera ',
                'price' => 35,
                'image' => 'zapato1.jpg',
                'category' => 'zapatos',
                'total_stock' => 200,
                'section' => 'woman',
            ],
            [
                'name' => 'Sandalias planas plataforma pulsera ',
                'price' => 40,
                'image' => 'zapato3.jpg',
                'category' => 'zapatos',
                'total_stock' => 200,
                'section' => 'woman',
            ],

        ];

        foreach ($products as $productData) {
            $product = Product::create($productData);

           
            $sizes = ['S', 'M', 'L','XL'];
            $stockPerSize = 50;
            foreach ($sizes as $size) { 
                ProductSize::create([
                    'product_id' => $product->id,
                    'size' => $size,
                    'stock' => $stockPerSize
                ]);

                // Actualiza el stock total del producto
                $product->total_stock += $stockPerSize;
            }

            $product->save(); 
        }

       /*  foreach ($products as $product) {
            DB::table('products')->insert($product);
        }

        // Array de relaciones entre productos y tamaños
        $productSizes = [];
        $products = DB::table('products')->pluck('id')->toArray();
        $sizes = DB::table('sizes')->pluck('id')->toArray();

        foreach ($products as $product_id) {
            foreach ($sizes as $size_id) {
                $productSizes[] = [
                    'product_id' => $product_id,
                    'size_id' => $size_id,
                ];
            }
        }

        
        // Inserta las combinaciones en la tabla product_sizes
        foreach ($productSizes as $productSize) {
            DB::table('product_sizes')->insert($productSize);
        }

 */
        //Seeder para usuarios

        $users = [
            [
                'name' => 'Juan Perez',
                'email' => 'juan@example.com',
                'password' => Hash::make('password123'),
                'user_role' => 'customer',
            ],
            [
                'name' => 'prueba',
                'email' => 'prueba@example.com',
                'password' => Hash::make('1234'),
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
