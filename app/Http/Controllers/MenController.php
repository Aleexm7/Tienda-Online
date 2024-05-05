<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use App\Models\ProductSize;

class MenController extends Controller
{
    public function index()
    {
        return view('sections.men');
    }


    public function getTshirtsBasic()
    {
        $products = ModelsProduct::where('category', '=', 'Camisetas básicas')->get();
        
        
        return view('sections.menTshirtBasic', compact('products'));
    }

    public function getTshirtsCropped()
    {
        $products = ModelsProduct::where('category', '=', 'Camisetas cropped')->get();
        
        
        return view('sections.menTshirtCropped', compact('products'));
    }

    public function getTshirtsGraphic(){
        $products = ModelsProduct::where('category', '=', 'Camisetas estampadas')->get();
        
        
        return view('sections.menTshirtGraphic', compact('products'));
    }

    public function getSudaderas(){
        // Obtener todas las sudaderas con sus tallas asociadas
        
        $products = ModelsProduct::where('category', '=', 'Sudaderas')->get();
        $sizes = ProductSize::all();

        return view('sections.menSudaderas', compact('products','sizes'));
    }

    public function getSudaderasSinCapucha(){
        $products = ModelsProduct::where('category', '=', 'Sudaderas Sin Capucha')->get();
        
        
        return view('sections.menSudaderasSinCapucha', compact('products'));
    }

    public function getPantalonesVaqueros(){
        $products = ModelsProduct::where('category', '=', 'Pantalones vaquero')->get();
        
        
        return view('sections.menPantalones', compact('products'));
    }

    public function getPantalonesBaggy(){
        $products = ModelsProduct::where('category', '=', 'Pantalones baggy')->get();
        
        
        return view('sections.menPantalonesBaggy', compact('products'));
    }

    public function getPantalonesCargo(){
        $products = ModelsProduct::where('category', '=', 'Pantalones cargo')->get();
        
        
        return view('sections.menPantalonesCargo', compact('products'));
    }

    public function getChaquetas(){
        $products = ModelsProduct::where('category', '=', 'Chaquetas')->get();
        
        
        return view('sections.menChaqueta', compact('products'));
    }
}
