<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;

class ApiGalleryController extends Controller
{
    public function create(Request $request){ 
        $user = new gallery();
        $user->id       = $request->input('id');
        return response()->json($user);
    }
    
    public function show(){ 
        $user = gallery::orderBy('id', 'ASC')->get();
        //Budget::orderBy('id', 'ASC')->where('tipo', 'CONTRATO')->where('archivado', '1')->get();
        return $user;
        
    }
}
