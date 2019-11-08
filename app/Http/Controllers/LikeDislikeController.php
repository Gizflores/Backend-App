<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\likedislike;

class LikeDislikeController extends Controller
{
    public function index()
    {
        $products = likedislike::orderBy('id','DESC')->paginate();
        return view('likedislike.index', compact('products'));
    }
    public function show($id){
        $product = likedislike::find($id);
        return view('likedislike.show',compact('product'));
    }

    public function destroy($id){
        $product = likedislike::find($id);
        $product->delete();
        return back()->with('info','El likedislike fue eliminado');
    }

    public function create(){       
        return view('likedislike.create');
    }

    public function store(Request $request){       
        $product = new likedislike;
        $product->id          = $request->id;
        $product->id_product        = $request->id_product;
        $product->id_user           = $request->id_user;
        $product->type              = $request->type;
        $product->closed            = $request->closed;
        $product->save();
        return redirect()->route('likedislike.index')->with('info','El gallery fue creado');
    }

    public function update(Request $request, $id){   
        $product = likedislike::find($id);
        $product->id           = $request->id;
        $product->id_product        = $request->id_product;
        $product->id_user           = $request->id_user;
        $product->type              = $request->type;
        $product->closed            = $request->closed;
        $product->save();
        return redirect()->route('likedislike.index')->with('info','El gallery fue actualizdo');
    }

    public function edit($id){
        $product = likedislike::find($id);
        return view('likedislike.edit',compact('product'));
    }
}
