<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;



class CartController extends Controller
{
   
    public function index(){
        $products = Product::all();
        
        return view('sections.cartSection', compact('products'));
    }



    public function add(Request $request)
    {
        // Recuperar el producto por su ID
        $producto = Product::find($request->id);
        if (empty($producto)){
            return redirect('/');
        }
           
        dd($producto);
    }
    
}
