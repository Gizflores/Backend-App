@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Editar producto
        </h2>

        @include('users.fragment.error')
        
        {!! Form::model($product, ['route' => ['users.update', $product->id], 'method' => 'PUT']) !!}

        @include('users.fragment.form')

        {!! Form::close()!!}
        </div>

        
        <div class="col-sm-4">
          @include('users.fragment.aside')
        </div>

</div>

@endsection 