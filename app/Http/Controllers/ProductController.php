<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Size;
class ProductController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
       $products = Product::all();/* Hacemos referencia al modelo product, con all nos lista todos los registros */
        
       return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product(); // O la lógica que uses para crear un nuevo producto
        return view('products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]); */

       
    
        /* // Utiliza el método create de Eloquent para crear y guardar un nuevo producto
        Product::create([
            'product_name' => $request->input('product_name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
        ]); */

        $productos = new Product();
    
        $productos->product_name = $request->get('product_name');
        $productos->description = $request->get('description');
        $productos->price = $request->get('price');
        $productos->stock = $request->get('stock');

        $productos->save();

        return redirect('/dashboardadmin')->with('success', 'Producto creado exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    
    
        $product = Product::findOrFail($id);
        $product->update($request->all());
    
        return redirect('/dashboardadmin')->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    


   


}
