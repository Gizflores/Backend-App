<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rates;
class RatesController extends Controller
{
    public function index()
    {
        $products = rates::orderBy('id_rates','DESC')->paginate();
        return view('rates.index', compact('products'));
    }
    public function show($id){
        $product = rates::find($id);
        return view('rates.show',compact('product'));
    }

    public function destroy($id){
        $product = rates::find($id);
        $product->delete();
        return back()->with('info','El rates fue eliminado');
    }

    public function create(){       
        return view('rates.create');
    }

    public function store(Request $request){       
        $product = new rates;
        $product->id_rates           = $request->id_rates;
        $product->id_boutique        = $request->id_boutique;
        $product->id_user            = $request->id_user;
        $product->rate               = $request->rate;
        $product->save();
        return redirect()->route('rates.index')->with('info','El rates fue creado');
    }

    public function update(Request $request, $id){   
        $product = rates::find($id);
        $product->id_rates              = $request->id_rates;
        $product->id_boutique           = $request->id_boutique;
        $product->id_user               = $request->id_user;
        $product->rate                  = $request->rate;
        $product->save();
        return redirect()->route('rates.index')->with('info','El rates fue actualizdo');
    }

    public function edit($id){
        $product = rates::find($id);
        return view('rates.edit',compact('product'));
    }
}
