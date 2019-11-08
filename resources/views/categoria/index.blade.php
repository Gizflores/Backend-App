@extends('layouts.app')

@section('content')

@include('categoria.fragment.aside')
<div class="row">
<div class="col-sm-12">
    <h2>Listado de Categorias
    <a href="{{route('categoria.create')}}" class="btn btn-primary pull-right" style="float: right">Nuevo</a>
    </h2>
    @include('categoria.fragment.info')
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th width="20px">Id_categoria</th> 
            <th>Nombre</th> 
            <!--<th colspan="3">&nbsp;</th>-->
        </tr>    
      </thead> 
      <tbody>

      @foreach($products as $product)
      
      <tr>
          <td>{{ $product->id}}</td>
          <td><strong>{{ $product->nombre }}</strong></td>
          
          <td>
          <a href="{{route('categoria.show',$product->id) }}" class="btn btn-secondary btn-sm">ver</a>
           </td>
          <td>
          <a href="{{route('categoria.edit',$product->id) }}" class="btn btn-secondary btn-sm">editar</a>
          </td>
          <td>
              <form action="{{route('categoria.destroy', $product->id)}}" method="POST">
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