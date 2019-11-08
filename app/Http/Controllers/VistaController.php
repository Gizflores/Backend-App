<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vista;
class VistaController extends Controller
{
    
    public function index()
    {
        $products = vista::orderBy('id_tallas','DESC')->paginate();
        return view('vista.index', compact('products'));
    }
    public function show($id){
        $product = vista::find($id);
        return view('vista.show',compact('product'));
    }

    public function destroy($id){
        $product = vista::find($id);
        $product->delete();
        return back()->with('info','El vista fue eliminado');
    }

    public function create(){       
        return view('vista.create');
    }

    public function store(Request $request){       
        $product = new vista;
        $product->id_tallas_item            = $request->id_tallas_item;
        $product->id_product                = $request->id_product;
        $product->talla                     = $request->talla;
        $product->save();
        return redirect()->route('vista.index')->with('info','El vista fue creado');
    }

    public function update(Request $request, $id){   
        $product = tallas_item::find($id);
        $product->id_tallas_item            = $request->id_tallas_item;
        $product->id_product                = $request->id_product;
        $product->talla                     = $request->talla;
        $product->save();
        return redirect()->route('vista.index')->with('info','El vista fue actualizdo');
    }

    public function edit($id){
        $product = vista::find($id);
        return view('vista.edit',compact('product'));
    }
}
