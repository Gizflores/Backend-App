<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;

class GalleryController extends Controller
{
    
    public function index()
    {
        $products = gallery::orderBy('id','DESC')->paginate();
        return view('gallery.index', compact('products'));
    }
    public function show($id){
        $product = gallery::find($id);
        return view('gallery.show',compact('product'));
    }

    public function destroy($id){
        $product = gallery::find($id);
        $product->delete();
        return back()->with('info','El gallery fue eliminado');
    }

    public function create(){       
        return view('gallery.create');
    }

    public function store(Request $request){       
        $product = new gallery;
        $product->id_gallery    = $request->id_gallery;
        $product->id_product    = $request->id_product;
        $product->url           = $request->url;
        $product->save();
        return redirect()->route('gallery.index')->with('info','El gallery fue creado');
    }

    public function update(Request $request, $id){   
        $product = gallery::find($id);
        $product->id_gallery    = $request->id_gallery;
        $product->id_product    = $request->id_product;
        $product->url           = $request->url;
        $product->save();
        return redirect()->route('gallery.index')->with('info','El gallery fue actualizdo');
    }

    public function edit($id){
        $product = gallery::find($id);
        return view('gallery.edit',compact('product'));
    }
}
