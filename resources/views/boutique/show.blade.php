@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-sm-2">
      
    <h2>Nombre</h2>
    <p>Direccion</p>
    <p>Email</p>
    <p>Telefono</p>
    <p>Id_boutique</p>  
    </div>

    <div class="col-sm-10">
      <h2>{{$product->nombre}}
        <a href="{{route('boutique.edit',$product->id) }}" class="btn btn-primary btn-sm" style="float: center">Editar</a>
        <a href="{{route('boutique.index',$product->id) }}" class="btn btn-primary btn-sm" style="margin-left: 10px; float: right;">Volver</a>
      </h2>        
        
        <p>{{$product->direccion}}</p>
        <p>{{$product->email}}</p>
        <p>{{$product->telefono}}</p>
        <p>{{$product->id_boutique}}</p>
        
        
        
    </div>
</div>

@endsection 