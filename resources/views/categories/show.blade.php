@extends('layouts.app')

@section('title',$category->name)

@section('content')
    <div class="row">
        <h1>{{$category->name}}</h1>
        @foreach ($category->products->chunk(3) as $productsChunk)
            <div class="row">
                <!-- Use the 'chunks' then to fill in the template -->
                @foreach ($productsChunk as $product)
                    <div class="col-md-4">
                        <div class="product-card">
                            <img src="{{ $product->imageurl }}" alt="{{ $product->name }}" class="shake-slow">
                            <div class="caption">
                                <h3>{{ $product->name}}</h3>
                                <p>{{ str_limit($product->description, $limit = 150, $end = '...') }}</p>
                                <div class='cta'>
                                    <span class="price">{{ $product->presentPrice() }}</span><br>
                                    {{--<a href="{{ route('shop.addToCart' , $product->id)}}" class="btn btn-default pull-right" role="button">Add to Cart</a>--}}
                                    <a href="{{ route('products.show' , $product->id)}}" class="btn btn-primary pull-right" role="button">See More</a>
                                    <!-- Check if user is logged in and is an Admin -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/csshake/1.5.0/csshake.min.css">
@endsection