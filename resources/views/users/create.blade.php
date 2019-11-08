@extends('layouts.app')


@section('content')

<div class="row">
        <div class="col-sm-10">
        <h2>
        Nuevo producto
        </h2>
        @include('users.fragment.error')

        {!! Form::open(['route' => 'users.store']) !!}

        @include('users.fragment.form')

        {!! Form::close()!!}

        </div>

        <div class="col-sm-2">          
          <a href="{{route('users.index') }}" class="btn btn-primary btn-sm" style="margin-left: 10px; float: right;">Volver</a>
        </div>

</div>


@endsection 