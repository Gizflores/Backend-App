@extends('layouts.app')

@section('content')
@include('likedislike.fragment.aside')
<div class="row">
<div class="col-sm-12">
    <h2>Listado de Like & Dislike
    <a href="{{route('likedislike.create')}}" class="btn btn-primary pull-right" style="float: right">Nuevo</a>
    </h2>
    @include('likedislike.fragment.info')
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th width="20px">Id</th> 
            <th>Id Product</th> 
            <th>Id User</th> 
            <th>Type</th> 
            <th>Closed</th> 
            <!--<th colspan="3">&nbsp;</th>-->
        </tr>    
      </thead> 
      <tbody>

      @foreach($products as $product)
      
      <tr>
          <td>{{ $product->id }}</td>
          <td><strong>{{ $product->id_product }}</strong></td>
          <td>{{ $product->id_user}}</td>
          <td>{{ $product->type}}</td>
          <td>{{ $product->closed}}</td>
          <td>
            <a href="{{route('likedislike.show',$product->id) }}" class="btn btn-secondary btn-sm">ver</a>
             </td>
            <td>
            <a href="{{route('likedislike.edit',$product->id) }}" class="btn btn-secondary btn-sm">editar</a>
            </td>
            <td>
                <form action="{{route('likedislike.destroy', $product->id)}}" method="POST">
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