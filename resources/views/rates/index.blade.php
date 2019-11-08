@extends('layouts.app')

@section('content')
@include('rates.fragment.aside')
<div class="row">
<div class="col-sm-12">
    <h2>Listado de Rates
    <a href="{{route('rates.create')}}" class="btn btn-primary pull-right" style="float: right">Nuevo</a>
    </h2>
    @include('rates.fragment.info')
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th width="20px">Id</th> 
            <th>Id boutique</th> 
            <th>Id User</th> 
            <th>Rate</th> 
            <!--<th colspan="3">&nbsp;</th>-->
        </tr>    
      </thead> 
      <tbody>

      @foreach($products as $product)
      
      <tr>
          <td>{{ $product->id_rates }}</td>
          <td><strong>{{ $product->id_boutique }}</strong></td>
          <td>{{ $product->id_user}}</td>
          <td>{{ $product->rate}}</td>
          
          <td>
          <a href="{{route('rates.show',$product->id_rates) }}" class="btn btn-secondary btn-sm">ver</a>
           </td>
          <td>
          <a href="{{route('rates.edit',$product->id_rates) }}" class="btn btn-secondary btn-sm">editar</a>
          </td>
          <td>
              <form action="{{route('rates.destroy', $product->id_rates)}}" method="POST">
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