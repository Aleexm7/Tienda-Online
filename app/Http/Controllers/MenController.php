<?php

namespace App\Http\Controllers;

use \App\Http\Models\Product;
use App\Models\Product as ModelsProduct;

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
        $products = ModelsProduct::where('category', '=', 'Sudaderas')->get();
        
        
        return view('sections.menSudaderas', compact('products'));
    }

    public function getSudaderasSinCapucha(){
        $products = ModelsProduct::where('category', '=', 'Sudaderas Sin Capucha')->get();
        
        
        return view('sections.menSudaderasSinCapucha', compact('products'));
    }
}
