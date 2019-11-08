@extends('layouts.app')

@section('content')
@include('boutique.fragment.aside')
<div class="row">
<div class="col-sm-12">
    <h2>Listado de Boutiques
    <a href="{{route('boutique.create')}}" class="btn btn-primary pull-right" style="float: right">Nuevo</a>
    </h2>
    @include('boutique.fragment.info')
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th width="20px">Id_boutique</th> 
            <th>Nombre</th> 
            <th>Direccion</th> 
            <th>Email</th> 
            <th>Telefono</th> 
            <!--<th colspan="3">&nbsp;</th>-->
        </tr>    
      </thead> 
      <tbody>

      @foreach($products as $product)
      
      <tr>
          <td>{{ $product->id }}</td>
          <td><strong>{{ $product->nombre }}</strong></td>
          <td>{{ $product->direccion}}</td>
          <td>{{ $product->email}}</td>
          <td>{{ $product->telefono}}</td>
          
          <td>
          <a href="{{route('boutique.show',$product->id) }}" class="btn btn-secondary btn-sm">ver</a>
           </td>
          <td>
          <a href="{{route('boutique.edit',$product->id) }}" class="btn btn-secondary btn-sm">editar</a>
          </td>
          <td>
              <form action="{{route('boutique.destroy', $product->id)}}" method="POST">
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

      
 
          
         
         
 


@endsection