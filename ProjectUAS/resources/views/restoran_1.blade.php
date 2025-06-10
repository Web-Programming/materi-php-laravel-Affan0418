@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Category Title</h5>
        <div>
            <a href="#" id="list" class="btn btn-outline-secondary btn-sm me-2">
                <i class="bi bi-list"></i> List
            </a>
            <a href="#" id="grid" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-grid-3x3-gap-fill"></i> Grid
            </a>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @php
            $produks = [
                ['name' => 'Jollof Rice', 'price' => 21, 'image' => 'download.jpg'],
                ['name' => 'Ewa Agoyin', 'price' => 31, 'image' => 'ewa.jpg'],
                ['name' => 'Akamu', 'price' => 11, 'image' => 'download.jpg'],
                ['name' => 'Egusi', 'price' => 1, 'image' => 'download.jpg'],
                ['name' => 'Fried Rice', 'price' => 22, 'image' => 'download.jpg'],
                ['name' => 'Pizza', 'price' => 21, 'image' => 'download.jpg'],
            ];
        @endphp

        @foreach($produks as $produk)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/' . $produk['image']) }}" class="card-img-top" alt="{{ $produk['name'] }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $produk['name'] }}</h5>
                    <p class="card-text flex-grow-1">
                        {{ $produk['name'] }} is nice, try it and you won't regret it.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold">${{ number_format($produk['price'], 2) }}</span>
                        <a href="{{ route('product.addToCart', ['id' => 1]) }}" class="btn btn-success btn-sm">
                            Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
