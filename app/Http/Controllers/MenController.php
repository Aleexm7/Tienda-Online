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

    public function getAllTshirts()
    {
        return view('sections.menTshirt');
    }

    public function getTshirtsBasic()
    {
        return view('sections.menTshirtBasic');
    }

    public function getTshirtsCropped()
    {
        return view('sections.menTshirtCropped');
    }

    public function getTshirtsGraphic(){
        return view('sections.menTshirtGraphic');
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
