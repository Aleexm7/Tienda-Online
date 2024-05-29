<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function confirmPayment(Request $request)
    {
       // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'address' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'cp' => 'required|string|max:10',
            'card_name' => 'required|string|max:255',
            'card_number' => 'required|string|max:19',
            'card_expiry' => 'required|string|max:7',
            'card_cvv' => 'required|string|max:3',
        ]);

        
        // Extraer solo los datos de facturación
        $billingData = $request->only(['name', 'apellidos', 'email', 'address', 'address2', 'pais', 'ciudad', 'cp']);

        
        // Obtener los productos del carrito del usuario (esto debería basarse en el ID del usuario, aquí asumimos $userId está disponible)
        $userId = auth()->id(); // o cualquier otro método para obtener el ID del usuario autenticado
       $cartProducts = DB::table('carts')
            ->join('cart_products', 'carts.id', '=', 'cart_products.cart_id')
            ->join('product_sizes', 'cart_products.product_sizes_id', '=', 'product_sizes.id')
            ->join('products', 'product_sizes.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.id as product_id', 'products.name as product_name', 'products.image as product_image', 'products.price as product_price', 'product_sizes.size as product_size', 'products.category as category', 'products.section as section', 'cart_products.quantity')
            ->get();

            
        // Calcular el subtotal y el total
        $subtotal = 0;
        foreach ($cartProducts as $product) {
            $subtotal += $product->product_price * $product->quantity;
        }
        $tax = $subtotal * 0.21;
        $total = $subtotal + $tax;

        // Pasar los datos de facturación y los productos del carrito a la vista
        return view('sections.paymentConfirmation', compact('billingData', 'cartProducts', 'subtotal', 'total'));
    }
}
