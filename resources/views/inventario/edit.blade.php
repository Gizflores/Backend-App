@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Editar producto
        </h2>

        @include('inventario.fragment.error')
        
        {!! Form::model($product, ['route' => ['inventario.update', $product->id], 'method' => 'PUT']) !!}

        @include('inventario.fragment.form')

        {!! Form::close()!!}
        </div>

        
        <div class="col-sm-4">
          @include('inventario.fragment.aside')
          <a href="{{route('inventario.index')}}" class="btn btn-primary" style="float: right">Volver</a>
        </div>

</div>

@endsection 