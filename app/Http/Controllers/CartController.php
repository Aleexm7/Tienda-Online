<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartProductModel;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductSize;


class CartController extends Controller
{

    public function index()
    {
        $userId = Auth::user()->id;

        // Obtener el carrito del usuario
        $cart = Cart::where('user_id', $userId)->first();

        if (!$cart) {

            return redirect()->route('home')->with('error', 'No hay productos en el carrito.');
        }

        // Obtener los productos del carrito junto con sus tamaños y detalles
        $cartProducts = CartProductModel::where('cart_id', $cart->id)->get();

        // Consulta para obtener los datos del carrito y los productos asociados
        $cartProducts = DB::table('carts')
            ->join('cart_products', 'carts.id', '=', 'cart_products.cart_id')
            ->join('product_sizes', 'cart_products.product_sizes_id', '=', 'product_sizes.id')
            ->join('products', 'product_sizes.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.id as product_id', 'products.name as product_name', 'products.image as product_image', 'products.price as product_price', 'product_sizes.size as product_size', 'products.category as category', 'products.section as section', 'cart_products.quantity')
            ->get();

        /* dd($cartProducts); */


        // Obtener la cantidad de productos en el carrito
        $quantityProduct = DB::table('carts')
            ->join('cart_products', 'carts.id', '=', 'cart_products.cart_id')
            ->where('carts.user_id', $userId)
            ->select('cart_products.quantity')
            ->get();


        $quantities = [];

        // Recorrer cada cantidad para almacenarla en el array
        foreach ($quantityProduct as $quantity) {
            $quantities[] = $quantity->quantity;
        }



        // Array asociativo que mapea las categorías de productos con los nombres de las subcarpetas de imágenes
        $categoryImageFolders = [
            'Sudaderas' => 'sudaderas',
            'Sudaderas sin capucha' => 'sudaderas',
            'Camisetas básicas' => 'camisetas',
            'Camisetas cropped' => 'camisetas',
            'Camisetas estampadas' => 'camisetas',
            'Pantalones vaquero' => 'pantalones',
            'Pantalones baggy' => 'pantalones',
            'Pantalones cargo' => 'pantalones',
            'Chaquetas' => 'chaquetas',
        ];

        $categoryImageFoldersWomen = [
            'Camisetas basicas' => 'camisetas',
            'Pantalones largo' => 'pantalones',
            'Pantalones corto' => 'pantalones',
            'Vestido largo' => 'vestido',
            'Vestido corto' => 'vestido',
            'zapato' => 'zapatos',
        ];

        // Construimos las rutas completas de las imágenes de los productos
        foreach ($cartProducts as $product) {
            if ($product->section === 'hombre' && isset($categoryImageFolders[$product->category])) {
                $categoryFolder = $categoryImageFolders[$product->category];
                $product->image_path = "/assets/img/products/men/{$categoryFolder}/{$product->product_image}";
            } elseif ($product->section === 'mujer' && isset($categoryImageFolders[$product->category])) {
                $categoryFolder = $categoryImageFoldersWomen[$product->category];
                $product->image_path = "/assets/img/products/women/{$categoryFolder}/{$product->product_image}";
            }



            $subtotal = 0;
            foreach ($cartProducts as $product) {
                
                $subtotal += $product->product_price * $product->quantity;
            }


            // Calcular el total sumando el impuesto al subtotal (21%)
            $tax = $subtotal * 0.21;
            $total = $subtotal + $tax;

            return view('sections.cartSection', compact('cartProducts', 'quantities', 'subtotal', 'tax', 'total'));
        }
    }



    public function add(Request $request)
    {

        $productId = $request->input('product_id');
        $sizeId = $request->input('size_id');

        $userId = Auth::user()->id;

        $cart = Cart::where('user_id', $userId)->first();
        $cartId = $cart->id;


        // Buscar la combinación de producto y talla
        $productSize = Product::find($productId)->sizes()->where('id', $sizeId)->first();

        if ($productSize) {

            DB::table('cart_products')->insert([
                'product_sizes_id' => $productSize->id,
                'quantity' => 1,
                'cart_id' => $cartId
            ]);

            // Redireccionar a la página anterior
            return redirect()->back()->with('success', 'Producto añadido al carrito exitosamente.');
        } else {
            // Si el producto no existe, redireccionar con un mensaje de error
            return redirect()->back()->with('error', 'El producto no existe.');
        }
    }



    public function removeFromCart(Request $request)
    {
        // Obtener el id del producto a eliminar del carrito
        $productId = $request->input('id');

        // Obtener el id del usuario autenticado
        $userId = Auth::user()->id;

        $cartProduct = DB::table('carts')
            ->join('cart_products', 'carts.id', '=', 'cart_products.cart_id')
            ->join('product_sizes', 'cart_products.product_sizes_id', '=', 'product_sizes.id')
            ->join('products', 'product_sizes.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->where('products.id', $productId)
            ->select('cart_products.*')
            ->first();


        if ($cartProduct) {
            // Eliminar el producto del carrito
            DB::table('cart_products')->where('id', $cartProduct->id)->delete();


            // Redirigir de vuelta con un mensaje de éxito
            return redirect()->back()->with('success', 'Producto eliminado del carrito exitosamente.');
        } else {
            // El producto no existe en el carrito
            return redirect()->back()->with('error', 'El producto no existe en el carrito.');
        }
    }
}
