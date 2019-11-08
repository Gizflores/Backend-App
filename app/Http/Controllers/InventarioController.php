<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inventario;
class InventarioController extends Controller
{
   
    public function index()
    {
        $products = inventario::orderBy('id','DESC')->paginate();
        return view('inventario.index', compact('products'));
    }
    public function show($id){
        $product = inventario::find($id);
        return view('inventario.show',compact('product'));
    }

    public function destroy($id){
        $product = inventario::find($id);
        $product->delete();
        return back()->with('info','El inventario fue eliminado');
    }

    public function create(){       
        return view('inventario.create');
    }

    public function store(Request $request){       
        $product = new inventario;
        $product->id_product        = $request->id_product;
        $product->id_boutique       = $request->id_boutique;
        $product->img_principal     = $request->img_principal;
        $product->nombre            = $request->nombre;
        $product->descripcion       = $request->descripcion;
        $product->precio            = $request->precio;
        $product->disponibilidad    = $request->disponibilidad;
        $product->save();
        return redirect()->route('inventario.index')->with('info','El gallery fue creado');
    }

    public function update(Request $request, $id){   
        $product = inventario::find($id);
        $product->id_product        = $request->id_product;
        $product->id_boutique       = $request->id_boutique;
        $product->img_principal     = $request->img_principal;
        $product->nombre            = $request->nombre;
        $product->descripcion       = $request->descripcion;
        $product->precio            = $request->precio;
        $product->disponibilidad    = $request->disponibilidad;
        $product->save();
        return redirect()->route('inventario.index')->with('info','El gallery fue actualizdo');
    }

    public function edit($id){
        $product = inventario::find($id);
        return view('inventario.edit',compact('product'));
    }
}
