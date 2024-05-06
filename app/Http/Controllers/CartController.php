<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartProductModel;
use App\Models\Cart;
use App\Models\ProductSize;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Instanceof_;
use Illuminate\Support\Facades\Auth;

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
            ->select('products.name as product_name', 'products.image as product_image', 'products.price as product_price', 'product_sizes.size as product_size')
            ->get();
        /* dd($cartProducts); */


        return view('sections.cartSection', compact('cartProducts'));
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
}
