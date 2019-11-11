<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class CrudController extends Controller
{
    public function index()
    {
        
        if (Auth::check()) {
            $user = Auth::user();
        }
        else{
            $user='ninguno';
        }
        $products = User::orderBy('id','ASC')->paginate();
        return view('users.index', compact('products','user'));

    }
    public function show($id){
        $product = User::find($id);
        return view('users.show',compact('product'));
    }

    public function destroy($id){
        $product = User::find($id);
        $product->delete();
        return back()->with('info','El users fue eliminado');
    }

    public function create(){       
        return view('users.create');
    }

    public function store(Request $request){       
        $product = new User;
        $product->name      = $request->name;
        $product->email     = $request->email;
        $product->password  = $request->password;
        $product->save();
        return redirect()->route('users.index')->with('info','El users fue creado');
    }

    public function update(Request $request, $id){   
        $product = User::find($id);
        $product->name      = $request->name;
        $product->email     = $request->email;
        $product->password  = $request->password;
        $product->save();
        return redirect()->route('users.index')->with('info','El users fue actualizdo');
    }

    public function edit($id){
        $product = User::find($id);
        return view('users.edit',compact('product'));
    }
}
