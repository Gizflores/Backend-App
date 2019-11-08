<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tallas_item;

class TallasItemController extends Controller
{
    
    public function index()
    {
        $products = tallas_item::orderBy('id_tallas','DESC')->paginate();
        return view('tallas_item.index', compact('products'));
    }
    public function show($id){
        $product = tallas_item::find($id);
        return view('tallas_item.show',compact('product'));
    }

    public function destroy($id){
        $product = tallas_item::find($id);
        $product->delete();
        return back()->with('info','El tallas_item fue eliminado');
    }

    public function create(){       
        return view('tallas_item.create');
    }

    public function store(Request $request){       
        $product = new tallas_item;
        $product->id_tallas_item            = $request->id_tallas_item;
        $product->id_product                = $request->id_product;
        $product->talla                     = $request->talla;
        $product->save();
        return redirect()->route('tallas_item.index')->with('info','El tallas_item fue creado');
    }

    public function update(Request $request, $id){   
        $product = tallas_item::find($id);
        $product->id_tallas_item            = $request->id_tallas_item;
        $product->id_product                = $request->id_product;
        $product->talla                     = $request->talla;
        $product->save();
        return redirect()->route('tallas_item.index')->with('info','El tallas_item fue actualizdo');
    }

    public function edit($id){
        $product = tallas_item::find($id);
        return view('tallas_item.edit',compact('product'));
    }
}
