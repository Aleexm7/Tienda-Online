<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSize;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {


        $product = new Product();


        return view('products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|string|max:255',
            'total_stock' => 'required|integer',
            'section' => 'required|string|in:hombre,mujer',
        ]); */



        $product = new Product();
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->category = $request->get('category');
        $product->total_stock = $request->get('total_stock');
        $product->section = $request->get('section');



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // Obtener el nombre original del archivo
            $originalName = $file->getClientOriginalName();

            // Guardar la imagen en el almacenamiento público sin cambiar el nombre
            $filePath = $file->store("public/assets/img/products/{$request->section}/productosNuevos");

            // Verificar si la imagen se ha guardado correctamente
            if ($filePath) {

                $product->image = $originalName;
                
            } else {
                // Manejar el caso en que la imagen no se haya guardado correctamente
                return redirect()->back()->with('error', 'Error al guardar la imagen.');
            }
        }


        



        $product->save();
        $this->processProduct($product);

        return redirect('/dashboardadmin')->with('success', 'Producto creado exitosamente.');
    }




    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }



    public function update(Request $request, $id)
    {


        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect('/dashboardadmin')->with('success', 'Producto actualizado exitosamente.');
    }


    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/dashboardadmin')->with('success', 'Producto eliminado exitosamente.');
    }



    public function countStock(string $id)
    {
        $product = ProductSize::all();

        return view('admin.dashboard', compact('countStock'));
    }



    // Método para procesar el producto recién almacenado
    private function processProduct(Product $product)
    {

        
        if ($product->section === 'men' && $product->category === 'Sudaderas') {
            return $this->showMenSudaderas($product);
        } elseif ($product->section === 'men' && $product->category === 'Sudaderas Sin Capucha') {
            return $this->showMenSudaderasSin($product);
        } elseif ($product->section === 'men' && $product->category === 'Camisetas basicas') {
            return $this->showMenCamisetasBasica($product);
        } elseif ($product->section === 'men' && $product->category === 'Pantalones Baggy') {
            return $this->showMenPantalonesBaggy($product);
        } elseif ($product->section === 'men' && $product->category === 'Pantalones Cargo') {
            return $this->showMenPantalonesCargo($product);
        }
    }


    // Método para mostrar la vista de las camisetas para hombres
    private function showMenCamisetasBasica(Product $product)
    {
        
        return view('sections.men.menTshirtGraphic', compact('productoInsertado'));
    }
}
