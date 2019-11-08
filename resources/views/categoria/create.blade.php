@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Nuevo producto
        </h2>
        @include('boutique.fragment.error')

        {!! Form::open(['route' => 'boutique.store']) !!}

        @include('boutique.fragment.form')

        {!! Form::close()!!}

        </div>

        <div class="col-sm-4">
          @include('boutique.fragment.aside')
        </div>

</div>


@endsection 