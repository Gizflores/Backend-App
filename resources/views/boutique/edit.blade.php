@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Editar producto
        </h2>

        @include('boutique.fragment.error')
        
        {!! Form::model($product, ['route' => ['boutique.update', $product->id], 'method' => 'PUT']) !!}

        @include('boutique.fragment.form')

        {!! Form::close()!!}
        </div>

        
        <div class="col-sm-4">
            @include('boutique.fragment.aside')
            <a href="{{route('boutique.index')}}" class="btn btn-primary" style="float: right">Volver</a>
          
        </div>

</div>

@endsection 