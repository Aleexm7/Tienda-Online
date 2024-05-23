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

            // Construir la ruta de destino
            $destinationPath = public_path("assets/img/products/{$request->section}/productosNuevos");

            // Mover el archivo al destino
            if ($file->move($destinationPath, $originalName)) {
                // Si el archivo se movió correctamente, guardar el nombre de la imagen en el producto
                $product->image = $originalName;
            } else {
                // Manejar el caso en que el archivo no se haya movido correctamente
                return redirect()->back()->with('error', 'Error al guardar la imagen.');
            }
        }



        // Guardar el producto en la base de datos
        if ($product->save()) {

            return redirect('/dashboardadmin')->with('success', 'Producto creado exitosamente.');
        } else {
            // Manejar el caso en que el producto no se haya guardado correctamente
            return redirect()->back()->with('error', 'Error al crear el producto.');
        }
    }


    protected function filterProducts($section, $category)
    {
        return Product::where('section', $section)
            ->where('category', $category)
            ->get();
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

    public function customIndex(Request $request)
    {
        // Obtener el valor de "show" desde la solicitud, por defecto mostrar 5 registros
        $show = $request->get('show', 5);

        // Validar que el valor de "show" sea un número permitido
        if (!in_array($show, [5, 10, 20])) {
            $show = 5;
        }

        // Obtener los productos con la paginación adecuada
        $products = Product::paginate($show);

        // Retornar la vista con los productos paginados y la variable "show"
        return view('products.index', compact('products', 'show'));
    }
}
