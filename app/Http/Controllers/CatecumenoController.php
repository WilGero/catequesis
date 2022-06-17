<?php

namespace App\Http\Controllers;

use App\Models\Catecumeno;
use Illuminate\Http\Request;

class CatecumenoController extends Controller
{
    public function index() {
        // $catecumenos = Catecumeno::all();
        $catecumenos = Catecumeno::paginate();
        return view('catecumenos.index',compact('catecumenos'));
    }
    public function show(Catecumeno $catecumeno){
        
        return view('catecumenos.show',compact('catecumeno'));
    }
    public function create(){
        return view('catecumenos.create');
    }
}
