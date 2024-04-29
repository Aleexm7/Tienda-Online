<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('sections.menSudaderas');
    }

    public function getSudaderasSinCapucha(){
        return view('sections.menSudaderasSinCapucha');
    }
}
