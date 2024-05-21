<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WomanController extends Controller
{
    public function index()
    {
        return view('sections.woman.womanHome');
    }

    public function getCamisetas()
    {
        $products = Product::where('category', 'Camisetas básicas')
                   ->where('section', 'mujer')
                   ->get();
        
        
        return view('sections.woman.womanCamisetas', compact('products'));
    }

    public function getPantalones()
    {
        $products = Product::where('category', 'Pantalones largo')
                   ->where('section', 'mujer')
                   ->get();
        
        
        return view('sections.woman.womanPantalones', compact('products'));
    }

    public function getPantalonesCorto()
    {
        $products = Product::where('category', 'Pantalones corto')
                   ->where('section', 'mujer')
                   ->get();
        
        
        return view('sections.woman.womanPantalonesCorto', compact('products'));
    }

    public function getVestidos()
    {
        $products = Product::where('category', 'Vestidos largo')
                   ->where('section', 'mujer')
                   ->get();
        
        
        return view('sections.woman.womanVestidos', compact('products'));
    }

    public function getVestidosCorto()
    {
        $products = Product::where('category', 'Vestidos corto')
                   ->where('section', 'mujer')
                   ->get();
        
        
        return view('sections.woman.womanVestidosCorto', compact('products'));
    }

    public function getZapatos()
    {
        $products = Product::where('section', 'mujer')
                   ->whereIn('category', ['Sandalias planas', 'Sandalias plataforma'])
                   ->get();
        
        
        return view('sections.woman.womanZapatos', compact('products'));
    }
}
