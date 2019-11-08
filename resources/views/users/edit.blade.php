@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-sm-10">
        <h2>
        Editar producto
        </h2>

        @include('users.fragment.error')
        
        {!! Form::model($product, ['route' => ['users.update', $product->id], 'method' => 'PUT']) !!}

        @include('users.fragment.form')

        {!! Form::close()!!}
        </div>

        
        <div class="col-sm-2">
          <a href="{{route('users.index',$product->id) }}" class="btn btn-primary btn-sm" style="margin-left: 10px; float: right;">Volver</a>
        </div>

</div>

@endsection 