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
        
        $products = Product::where('section', 'woman')
                    ->where('category', 'Camisetas basicas')
        
                   ->get();
        
        return view('sections.woman.womanCamisetas', compact('products'));
    }

    public function getPantalones()
    {
        $products = Product::where('category', 'Pantalones largo')
                   ->where('section', 'woman')
                   ->get();
        
        
        return view('sections.woman.womanPantalones', compact('products'));
    }

    public function getPantalonesCorto()
    {
        $products = Product::where('category', 'Pantalones corto')
                   ->where('section', 'woman')
                   ->get();
        
        
        return view('sections.woman.womanPantalonesCorto', compact('products'));
    }

    public function getVestidos()
    {
        $products = Product::where('category', 'Vestido largo')
                   ->where('section', 'woman')
                   ->get();
        
        
        return view('sections.woman.womanVestidos', compact('products'));
    }

    public function getVestidosCorto()
    {
        $products = Product::where('category', 'Vestido corto')
                   ->where('section', 'woman')
                   ->get();
        
        
        return view('sections.woman.womanVestidosCorto', compact('products'));
    }

    public function getZapatos()
    {
        $products = Product::where('section', 'woman')
                   ->where('category', 'zapatos')
                   ->get();
        
        
        return view('sections.woman.womanZapatos', compact('products'));
    }
}
