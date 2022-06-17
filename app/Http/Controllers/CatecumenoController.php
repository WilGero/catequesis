<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatecumenoController extends Controller
{
    public function index() {
        return view('catecumenos.index');
    }
    public function show($catecumeno){
        return view('catecumenos.show',compact('catecumeno'));
    }
}
