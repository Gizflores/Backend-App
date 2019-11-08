@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-sm-2">
      
    <h2>Id</h2>
    <p>Id Producto</p>
    <p>Url</p>
    </div>

    <div class="col-sm-10">
      <h2>{{$product->id}}
        <a href="{{route('likedislike.edit',$product->id) }}" class="btn btn-primary btn-sm" style="float: center">Editar</a>
        <a href="{{route('likedislike.index',$product->id) }}" class="btn btn-primary btn-sm" style="margin-left: 10px; float: right;">Volver</a>
      </h2>        
        
        <p>{{$product->id_product}}</p>
        <p>{{$product->url}}</p>
        
        
    </div>
</div>

</div>
@endsection 