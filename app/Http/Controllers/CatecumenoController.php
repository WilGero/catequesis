<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatecumenoController extends Controller
{
    public function index() {
        return view('catecumenos.index');
    }
}
