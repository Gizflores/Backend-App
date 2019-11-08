@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        {{$product->name}}
        <a href="{{route('users.edit',$product->id) }}" class="btn btn-primary btn-sm">editar</a>
        </h2>
        <p>
        {{$product->short}}
        </p>
        {!! $product->body !!}
        </div>

        <div class="col-sm-4">
          @include('users.fragment.aside')
        </div>

</div>

@endsection 