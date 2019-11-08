<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\boutique;

class BoutiqueController extends Controller
{
    public function index()
    {
        $products = boutique::orderBy('id','DESC')->paginate();
        return view('boutique.index', compact('products'));
    }
    public function show($id){
        $product = boutique::find($id);
        return view('boutique.show',compact('product'));
    }

    public function destroy($id){
        $product = boutique::find($id);
        $product->delete();
        return back()->with('info','El boutique fue eliminado');
    }

    public function create(){       
        return view('boutique.create');
    }

    public function store(Request $request){       
        $product = new boutique;
        $product->id_user       = $request->id_user;
        $product->nombre        = $request->nombre;
        $product->direccion     = $request->direccion;
        $product->email         = $request->email;
        $product->telefono      = $request->telefono;
        $product->save();
        return redirect()->route('boutique.index')->with('info','El boutique fue creado');
    }

    public function update(Request $request, $id){   
        $product = boutique::find($id);
        $product->id_user       = $request->id_user;
        $product->nombre        = $request->nombre;
        $product->direccion     = $request->direccion;
        $product->email         = $request->email;
        $product->telefono      = $request->telefono;
        $product->save();
        return redirect()->route('boutique.index')->with('info','El boutique fue actualizdo');
    }

    public function edit($id){
        $product = boutique::find($id);
        return view('boutique.edit',compact('product'));
    }
}
