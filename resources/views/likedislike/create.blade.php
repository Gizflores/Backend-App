@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Nuevo producto
        </h2>
        @include('likedislike.fragment.error')

        {!! Form::open(['route' => 'likedislike.store']) !!}

        @include('likedislike.fragment.form')

        {!! Form::close()!!}

        </div>

        <div class="col-sm-4">
          @include('likedislike.fragment.aside')
        </div>

</div>


@endsection 