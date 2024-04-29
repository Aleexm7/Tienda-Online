<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;



class CartController extends Controller
{
   
    public function agregarProducto(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|numeric|min:1',
            // Agrega más reglas de validación según sea necesario
        ]);

        // Recuperar el producto por su ID
        $producto = Product::findOrFail($request->producto_id);

        // Aquí puedes implementar la lógica para agregar el producto al carrito
        // Por ejemplo, podrías almacenar los detalles del producto en la sesión

        // Retorna una respuesta adecuada, por ejemplo, un mensaje de éxito
        return response()->json(['mensaje' => 'Producto agregado al carrito exitosamente']);
    }
}
