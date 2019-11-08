<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\talla;

class TallaController extends Controller
{
    
    public function index()
    {
        $products = talla::orderBy('id_tallas','DESC')->paginate();
        return view('talla.index', compact('products'));
    }
    public function show($id){
        $product = talla::find($id);
        return view('talla.show',compact('product'));
    }

    public function destroy($id){
        $product = talla::find($id);
        $product->delete();
        return back()->with('info','El talla fue eliminado');
    }

    public function create(){       
        return view('talla.create');
    }

    public function store(Request $request){       
        $product = new talla;
        $product->id_tallas           = $request->id_tallas;
        $product->id_categoria        = $request->id_categoria;
        $product->talla            = $request->talla;
        $product->save();
        return redirect()->route('talla.index')->with('info','El talla fue creado');
    }

    public function update(Request $request, $id){   
        $product = rates::find($id);
        $product->id_tallas           = $request->id_tallas;
        $product->id_categoria        = $request->id_categoria;
        $product->talla            = $request->talla;
        $product->save();
        return redirect()->route('talla.index')->with('info','El talla fue actualizdo');
    }

    public function edit($id){
        $product = talla::find($id);
        return view('talla.edit',compact('product'));
    }
}
