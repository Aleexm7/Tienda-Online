<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WomanController extends Controller
{
    public function index()
    {
        return view('sections.woman');
    }
}
