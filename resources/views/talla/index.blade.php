@extends('layouts.app')

@section('content')

@include('talla.fragment.aside')
<div class="row">
<div class="col-sm-12">
    <h2>Listado de Tallas
    <a href="{{route('talla.create')}}" class="btn btn-primary pull-right" style="float: right">Nuevo</a>
    </h2>
    @include('talla.fragment.info')
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th width="20px">Id</th> 
            <th>Id Categoria</th> 
            <th>Talla</th> 
        </tr>    
      </thead> 
      <tbody>

      @foreach($products as $product)
      
      <tr>
          <td>{{ $product->id_tallas }}</td>
          <td><strong>{{ $product->id_categoria }}</strong></td>
          <td>{{ $product->talla}}</td>
          
          <td>
          <a href="{{route('talla.show',$product->id_tallas) }}" class="btn btn-secondary btn-sm">ver</a>
           </td>
          <td>
          <a href="{{route('talla.edit',$product->id_tallas) }}" class="btn btn-secondary btn-sm">editar</a>
          </td>
          <td>
              <form action="{{route('talla.destroy', $product->id_tallas)}}" method="POST">
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