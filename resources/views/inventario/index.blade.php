@extends('layouts.app')

@section('content')
@include('inventario.fragment.aside')
<div class="row">
<div class="col-sm-12">
    <h2>Listado de Inventario
    <a href="{{route('inventario.create')}}" class="btn btn-primary pull-right" style="float: right">Nuevo</a>
    </h2>
    @include('inventario.fragment.info')
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th>Id Product</th> 
            <th>Id Boutique</th> 
            <th>Id Categoria</th> 
            <th>Imagen</th> 
            <th>Nombre</th> 
            <th>Descripcion</th> 
            <th>Precio</th> 
            <th>Disponibilidad</th> 
            <!--<th colspan="3">&nbsp;</th>-->
        </tr>    
      </thead> 
      <tbody>

      @foreach($products as $product)
      
      <tr>
          <td>{{ $product->id}}</td>          
          <td><strong>{{ $product->id_boutique }}</strong></td>
          <td>{{ $product->id_categoria}}</td>
          <td>{{ $product->img_principal}}</td>
          <td>{{ $product->nombre}}</td>
          <td>{{ $product->descripcion}}</td>
          <td>{{ $product->precio}}</td>
          <td>{{ $product->disponibilidad}}</td>
          
          <td>
          <a href="{{route('inventario.show',$product->id) }}" class="btn btn-secondary btn-sm">ver</a>
           </td>
          <td>
          <a href="{{route('inventario.edit',$product->id) }}" class="btn btn-secondary btn-sm">editar</a>
          </td>
          <td>
              <form action="{{route('inventario.destroy', $product->id)}}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-danger btn-sm">Borrar</button>
              </form>
          </td>
      </tr>
     
    @endforeach
    </tbody>
    </table>
    {!! $products->render() !!}

      
  </div>
          
  </div>


@endsection