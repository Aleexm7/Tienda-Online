<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Size;
use App\Models\Cart;
use App\Models\ProductSize;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Instanceof_;

class CartController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('sections.cartSection', compact('products'));
    }



    public function add(Request $request)
    {
         /* dd($request->all()); */
        // Obtener los IDs del producto y la talla
        $productId = $request->input('product_id');
        $sizeId = $request->input('size_id');
        dd($request);


        // Buscar la combinación de producto y talla
        $productSize = ProductSize::where('product_id', $productId)
            ->where('size_id', $sizeId)
            ->first();

        if ($productSize) {

            DB::table('cart_products')->insert([
                'product_size_id' => $productSize->id,
                'quantity' => 1
            ]);

            // Redireccionar a la página anterior
            return redirect()->back()->with('success', 'Producto añadido al carrito exitosamente.');
        } else {
            // Si el producto no existe, redireccionar con un mensaje de error
            return redirect()->back()->with('error', 'El producto no existe.');
        }
    }
}
