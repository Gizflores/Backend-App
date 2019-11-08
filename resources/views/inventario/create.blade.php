@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Nuevo producto
        </h2>
        @include('inventario.fragment.error')

        {!! Form::open(['route' => 'inventario.store']) !!}

        @include('inventario.fragment.form')

        {!! Form::close()!!}

        </div>

        <div class="col-sm-4">
          @include('inventario.fragment.aside')
        </div>

</div>


@endsection 