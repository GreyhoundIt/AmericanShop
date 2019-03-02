@extends('layouts.app')

@section('title',$category->name)

@section('content')
    <div class="row" id="app">
        <h1>{{$category->name}}</h1>
        @foreach ($category->products->chunk(3) as $productsChunk)
            <div class="row" >
                <!-- Use the 'chunks' then to fill in the template -->
                @foreach ($productsChunk as $product)
                    <product-card :product="{{$product}}" ></product-card>
                @endforeach
            </div>
        @endforeach
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/csshake/1.5.0/csshake.min.css">
@endsection