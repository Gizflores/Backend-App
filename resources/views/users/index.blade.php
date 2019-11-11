@extends('layouts.app')

@section('content')
@include('users.fragment.aside')
<div class="row">
<div class="col-sm-12">
    <h2>Listado de Usuarios
    <h2>{{$user}}</h2>
    <a href="{{route('users.create')}}" class="btn btn-primary pull-right" style="float: right">Nuevo</a>
    </h2>
    @include('users.fragment.info')
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th>Id</th>             
            <th>Id boutique</th> 
            <th>Nombre del Usuario</th> 
            <th>Email</th> 
            <!--<th colspan="3">&nbsp;</th>-->
        </tr>    
      </thead> 
      <tbody>

      @foreach($products as $product)
      
      <tr>
          <td>{{ $product->id }}</td>          
          <td>{{ $product->id_boutique }}</td>
          <td><strong>{{ $product->name }}</strong></td>
          <td>{{ $product->email}}</td>
          
          <td>
          <a href="{{route('users.show',$product->id) }}" class="btn btn-secondary btn-sm">ver</a>
           </td>
          <td>
          <a href="{{route('users.edit',$product->id) }}" class="btn btn-secondary btn-sm">editar</a>
          </td>
          <td>
              <form action="{{route('users.destroy', $product->id)}}" method="POST">
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