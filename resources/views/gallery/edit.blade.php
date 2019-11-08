@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Editar producto
        </h2>

        @include('gallery.fragment.error')
        
        {!! Form::model($product, ['route' => ['gallery.update', $product->id], 'method' => 'PUT']) !!}

        @include('gallery.fragment.form')

        {!! Form::close()!!}
        </div>

        
        <div class="col-sm-4">
          @include('gallery.fragment.aside')
          <a href="{{route('gallery.index')}}" class="btn btn-primary" style="float: right">Volver</a>
        </div>

</div>

@endsection 