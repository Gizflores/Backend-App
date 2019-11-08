@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Editar producto
        </h2>

        @include('categoria.fragment.error')
        
        {!! Form::model($product, ['route' => ['categoria.update', $product->id], 'method' => 'PUT']) !!}

        @include('categoria.fragment.form')

        {!! Form::close()!!}
        </div>

        
        <div class="col-sm-4">
          @include('categoria.fragment.aside')
          <a href="{{route('categoria.index',$product->id) }}" class="btn btn-primary btn-sm" style="margin-left: 10px; float: right;">Volver</a>
       
        </div>

</div>

@endsection 