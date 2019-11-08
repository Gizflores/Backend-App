@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-sm-2">
        <h2>Nombre</h2>
        
        <p>Email</p>
        <p>Password</p>
        <p>Id</p>
        </div>

        <div class="col-sm-10">
          <h2>{{$product->name}}
            <a href="{{route('users.edit',$product->id) }}" class="btn btn-primary btn-sm" style="float: center">Editar</a>
            <a href="{{route('users.index',$product->id) }}" class="btn btn-primary btn-sm" style="margin-left: 10px; float: right;">Volver</a>
          </h2>
            
            <p>{{$product->email}}</p>
            <p>{{$product->password}}</p>
            <p>{{$product->id_boutique}}</p>
            
            
            
        </div>
<!--  'name', 'id_boutique', 'email', 'password', -->
</div>

@endsection 