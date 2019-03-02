@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="row" id="app">
        <product-detail :product="{{$product}}"></product-detail>
        <related-products></related-products>
    </div>

@endsection