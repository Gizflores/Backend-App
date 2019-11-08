<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
class CategoriaController extends Controller
{
    public function index()
    {
        $products = categoria::orderBy('id','DESC')->paginate();
        return view('categoria.index', compact('products'));
    }
    public function show($id){
        $product = categoria::find($id);
        return view('categoria.show',compact('product'));
    }

    public function destroy($id){
        $product = categoria::find($id);
        $product->delete();
        return back()->with('info','El categoria fue eliminado');
    }

    public function create(){       
        return view('categoria.create');
    }

    public function store(Request $request){       
        $product = new categoria;
        $product->nombre        = $request->nombre;
        $product->save();
        return redirect()->route('categoria.index')->with('info','El categoria fue creado');
    }

    public function update(Request $request, $id){   
        $product = categoria::find($id);
        $product->nombre        = $request->nombre;
        $product->save();
        return redirect()->route('categoria.index')->with('info','El categoria fue actualizdo');
    }

    public function edit($id){
        $product = categoria::find($id);
        return view('categoria.edit',compact('product'));
    }
}
