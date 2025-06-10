@extends('layouts.app')

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </nav>

    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title mb-4">Add to Cart</h4>

            <form action="{{ url('/cart') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">

                <button type="submit" class="btn btn-success btn-lg">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

