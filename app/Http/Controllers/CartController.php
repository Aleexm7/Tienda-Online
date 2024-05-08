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

        // Obtener los productos del carrito junto con sus tamaños y detalles
        $cartProducts = CartProductModel::where('cart_id', $cart->id)->get();

        // Consulta para obtener los datos del carrito y los productos asociados
        $cartProducts = DB::table('carts')
            ->join('cart_products', 'carts.id', '=', 'cart_products.cart_id')
            ->join('product_sizes', 'cart_products.product_sizes_id', '=', 'product_sizes.id')
            ->join('products', 'product_sizes.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.name as product_name', 'products.image as product_image', 'products.price as product_price', 'product_sizes.size as product_size', 'products.category as category')
            ->get();



        // Obtener la cantidad de productos en el carrito
        $quantityProduct = DB::table('carts')
            ->join('cart_products', 'carts.id', '=', 'cart_products.cart_id')
            ->where('carts.user_id', $userId)
            ->select('cart_products.quantity')
            ->get();
        /* dd($quantityProduct); */
    
        $quantities = [];

        // Recorrer cada cantidad para almacenarla en el array
        foreach ($quantityProduct as $quantity) {
            $quantities[] = $quantity->quantity;
        }
        
        
       
        // Array asociativo que mapea las categorías de productos con los nombres de las subcarpetas de imágenes
        $categoryImageFolders = [
            'Sudaderas' => 'sudaderas',
            'Sudaderas Sin Capucha' => 'sudaderas',
            'Camisetas básicas' => 'camisetas',
            'Camisetas cropped' => 'camisetas',
            'Camisetas estampadas' => 'camisetas',
            'Pantalones vaquero' => 'pantalones',
            'Pantalones baggy' => 'pantalones',
            'Pantalones cargo' => 'pantalones',
            'Chaquetas' => 'chaquetas',
        ];


        // Construimos las rutas completas de las imágenes de los productos
        foreach ($cartProducts as $product) {
            $categoryFolder = $categoryImageFolders[$product->category];
            $product->image_path = "/assets/img/products/men/{$categoryFolder}/{$product->product_image}";
        }
        return view('sections.cartSection', compact('cartProducts', 'quantities'));
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

    public function updateStock()
    {

        $userId = Auth::user()->id;

        // Obtener el carrito del usuario
        $cart = Cart::where('user_id', $userId)->first();

        // Obtener los productos del carrito junto con sus tamaños y detalles
        $cartProducts = CartProductModel::where('cart_id', $cart->id)->get();

        $cartProducts = DB::table('carts')
            ->join('cart_products', 'carts.id', '=', 'cart_products.cart_id')
            ->join('product_sizes', 'cart_products.product_sizes_id', '=', 'product_sizes.id')
            ->join('products', 'product_sizes.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.id as product_id', 'product_sizes.id as size_id', 'cart_products.quantity as quantity')
            ->get();



        foreach ($cartProducts as $cartProduct) {

            $productSize = ProductSize::find($cartProduct->size_id);


            // Restar la cantidad del carrito del stock de la talla
            $productSize->stock -= $cartProduct->quantity;

            $productSize->save();

            // Actualizar el stock total del producto
            $product = Product::find($cartProduct->product_id);
            $product->total_stock -= $cartProduct->quantity;
            $product->save();


            /* foreach ($cart as $cartProduct) {
            $product = Product::find($cartProduct->id);
            dd($product);
            $productSize = ProductSize::where('product_id', $cartProduct->product_id)
                ->where('size', $cartProduct->product_size)
                ->first();
        } */

            return redirect()->back()->with('stock_updated', 'Stock updated successfully!');
        }
    }
}
