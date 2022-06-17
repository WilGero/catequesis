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
    public function store(Request $request){
       $catecumeno=new Catecumeno();
       $catecumeno->name=$request->name;
       $catecumeno->surname=$request->surname;
       $catecumeno->birth=$request->birth;
       $catecumeno->save(); 
       // $catecumeno= Catecumeno::create($request->all());
        return redirect()->route('catecumenos.show',$catecumeno);
    }
    public function edit(Catecumeno $catecumeno){
        return view('catecumenos.edit',compact('catecumeno'));
    }
    public function update(Request $request,Catecumeno $catecumeno){
        $catecumeno->update($request->all());
        return redirect()->route('catecumenos.show',$catecumeno);
    }
}
