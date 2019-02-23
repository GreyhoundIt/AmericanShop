@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">{{$product->name}}</h1>
                <img src="{{ $product->imageurl }}" alt="{{ $product->name }}" class="card-img-top">
              </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name  }}</h5>
                    <p class="card-text"> {{ $product->description }}</p>
                    <h6 class="card-tesxt">{{ $product->price }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection