@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-sm-2">
      
    <h2>Id</h2>
    <p>Id boutique</p>
    <p>Id Categoria</p>
    <h2>Imagen</h2>
    <p>Nombre</p>
    <p>Descripcion</p>
    <p>Precio</p>
    <p>Disponibilidad</p>
    </div>

    <div class="col-sm-10">
      <h2>{{$product->id}}
        <a href="{{route('inventario.edit',$product->id) }}" class="btn btn-primary btn-sm" style="float: center">Editar</a>
        <a href="{{route('inventario.index',$product->id) }}" class="btn btn-primary btn-sm" style="margin-left: 10px; float: right;">Volver</a>
      </h2>        
        
        <p>{{$product->id_boutique}}</p>
        <p>{{$product->id_categoria}}</p>
        <p>{{$product->img_principal}}</p>
        <p>{{$product->nombre}}</p>
        <p>{{$product->descripcion}}</p>
        <p>{{$product->precio}}</p>
        <p>{{$product->disponibilidad}}</p>
        
        
    </div>
</div>

</div>

@endsection 