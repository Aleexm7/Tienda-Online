<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use App\Models\ProductSize;

class MenController extends Controller
{
    public function index()
    {
        return view('sections.men.men');
    }


    public function getTshirtsBasic()
    {
        $products = ModelsProduct::where('section', 'men')
            ->where('category', 'Camisetas basicas')
            ->get();

        $sizes = ProductSize::all();

        return view('sections.men.menTshirtBasic', compact('products', 'sizes'));
    }

    public function getTshirtsCropped()
    {
        $products = ModelsProduct::where('section', 'men')
            ->where('category', 'Camisetas cropped')
            ->get();

        $sizes = ProductSize::all();




        return view('sections.men.menTshirtCropped', compact('products', 'sizes'));
    }

    public function getTshirtsGraphic()
    {
        $products = ModelsProduct::where('section', 'men')
            ->where('category', 'Camisetas estampadas')
            ->get();


        $sizes = ProductSize::all();
        // Filtrar los últimos productos creados que coincidan con la sección y categoría correspondientes
        $latestProduct = ModelsProduct::where('section', 'men')
        ->where('category', 'Camisetas estampadas')
        ->latest()
        ->first();
    
        
    
        $latestProducts = ModelsProduct::where('section', 'men')
            ->where('category', 'Camisetas estampadas')
            ->where('created_at', '<=', $latestProduct->created_at)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
            
        dd($latestProducts);
    
        
        return view('sections.men.menTshirtGraphic', compact('products', 'sizes', 'latestProducts'));
    }

    public function getSudaderas()
    {
        // Obtener todas las sudaderas con sus tallas asociadas

        $products = ModelsProduct::where('category', '=', 'Sudaderas')->get();
        $sizes = ProductSize::all();


        return view('sections.men.menSudaderas', compact('products', 'sizes'));
    }

    public function getSudaderasSinCapucha()
    {
        $products = ModelsProduct::where('category', '=', 'Sudaderas Sin Capucha')->get();

        $sizes = ProductSize::all();
        return view('sections.men.menSudaderasSinCapucha', compact('products', 'sizes'));
    }

    public function getPantalonesVaqueros()
    {
        $products = ModelsProduct::where('category', '=', 'Pantalones vaquero')->get();

        $sizes = ProductSize::all();
        return view('sections.men.menPantalones', compact('products', 'sizes'));
    }

    public function getPantalonesBaggy()
    {
        $products = ModelsProduct::where('category', '=', 'Pantalones baggy')->get();

        $sizes = ProductSize::all();

        return view('sections.men.menPantalonesBaggy', compact('products', 'sizes'));
    }

    public function getPantalonesCargo()
    {
        $products = ModelsProduct::where('category', '=', 'Pantalones cargo')->get();

        $sizes = ProductSize::all();
        return view('sections.men.menPantalonesCargo', compact('products', 'sizes'));
    }

    public function getChaquetas()
    {
        $products = ModelsProduct::where('category', '=', 'Chaquetas')->get();

        $sizes = ProductSize::all();

        return view('sections.men.menChaqueta', compact('products', 'sizes'));
    }
}
