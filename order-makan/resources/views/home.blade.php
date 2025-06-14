@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="hero-section" style="background: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center; background-size: cover; height: 60vh; position: relative;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);"></div>
    <div class="container h-100 d-flex align-items-center">
        <div class="text-white" style="position: relative; z-index: 1;">
            <h1 class="display-4 fw-bold">Ayam Richeese</h1>
            <p class="lead">Crispy, Juicy, and Delicious Chicken</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">Order Now</a>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="featured-section p-4">
        <h2 class="section-title">Featured Menu</h2>
        <div class="row">
            @foreach($featuredProducts as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300' }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="popular-section p-4">
        <h2 class="section-title">Popular Menu</h2>
        <div class="row">
            @foreach($popularProducts as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300' }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection