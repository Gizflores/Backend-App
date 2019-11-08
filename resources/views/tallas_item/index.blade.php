@extends('layouts.app')

@section('content')

@include('tallas_item.fragment.aside')
<div class="row">
<div class="col-sm-12">
    <h2>Listado de Tallas de los Items
    <a href="{{route('tallas_item.create')}}" class="btn btn-primary pull-right" style="float: right">Nuevo</a>
    </h2>
    @include('tallas_item.fragment.info')
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th width="20px">Id</th> 
            <th>Id Product</th> 
            <th>Talla</th> 
        </tr>    
      </thead> 
      <tbody>

      @foreach($products as $product)
      
      <tr>
          <td>{{ $product->id_tallas_item }}</td>
          <td><strong>{{ $product->id_product }}</strong></td>
          <td>{{ $product->talla}}</td>
          
          <td>
          <a href="{{route('tallas_item.show',$product->id_tallas_item) }}" class="btn btn-secondary btn-sm">ver</a>
           </td>
          <td>
          <a href="{{route('tallas_item.edit',$product->id_tallas_item) }}" class="btn btn-secondary btn-sm">editar</a>
          </td>
          <td>
              <form action="{{route('tallas_item.destroy', $product->id_tallas_item)}}" method="POST">
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