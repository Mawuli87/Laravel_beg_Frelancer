@extends('layouts.app')
@section('title') Index Page @endsection

@section('content')

{{-- @foreach ($products as $product )
    {{ $product->name }} : {{ $product->price }}
@endforeach --}}

{{ $cat->name }}

@endsection