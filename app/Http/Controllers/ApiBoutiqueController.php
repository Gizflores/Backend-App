<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\boutique;

class ApiBoutiqueController extends Controller
{
    public function create(Request $request){ 
        $user = new boutique();
        $user->nombre       = $request->input('nombre');
        $user->direccion    = $request->input('direccion');
        $user->email        = $request->input('email');
        $user->telefono     = $request->input('telefono');
        $user->save();
        return response()->json($user);
    }
    
    public function show(){ 
        $user = boutique::orderBy('id', 'ASC')->get();
        //Budget::orderBy('id', 'ASC')->where('tipo', 'CONTRATO')->where('archivado', '1')->get();
        return $user;
        
    }
}
