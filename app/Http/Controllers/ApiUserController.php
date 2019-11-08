<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class ApiUserController extends Controller
{
    public function create(Request $request){ 
        $user = new User();
        $user->id_boutique  = $request->input('id_boutique');
        $user->name         = $request->input('name');
        $user->email        = $request->input('email');
        $user->password     = $request->input('password');
        $user->save();
        return('Posteo satisfactiorio');
        //return response()->json($user);
    }
    
    public function show(){ 
        $user = User::orderBy('id', 'ASC')->get();
        //Budget::orderBy('id', 'ASC')->where('tipo', 'CONTRATO')->where('archivado', '1')->get();
        return $user;
        
    }
   
}
/* 'name', 'email', 'password',*/