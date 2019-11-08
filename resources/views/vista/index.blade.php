@extends('layouts.app')

@section('content')
@include('vista.fragment.aside')
<div class="row">
<div class="col-sm-12">
    <h2>Listado de Vista
    <a href="{{route('vista.create')}}" class="btn btn-primary pull-right" style="float: right">Nuevo</a>
    </h2>
    @include('vista.fragment.info')
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th width="20px">Id</th> 
            <th>Id User</th> 
            <th>Id Product</th> 
        </tr>    
      </thead> 
      <tbody>

      @foreach($products as $product)
      
      <tr>
          <td>{{ $product->id_vistas }}</td>
          <td><strong>{{ $product->id_user }}</strong></td>
          <td>{{ $product->id_product}}</td>
          
          <td>
          <a href="{{route('vista.show',$product->id_vistas) }}" class="btn btn-secondary btn-sm">ver</a>
           </td>
          <td>
          <a href="{{route('vista.edit',$product->id_vistas) }}" class="btn btn-secondary btn-sm">editar</a>
          </td>
          <td>
              <form action="{{route('vista.destroy', $product->id_vistas)}}" method="POST">
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