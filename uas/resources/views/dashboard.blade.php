@extends('layout.master')

@section('title', 'Dashboard - Richeese Chicken Order')

@section('content')
  <h2 class="mb-4">Available Richeese Menu</h2>

  <div class="row">
    <!-- Product Card 1 -->
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/4/5/nudesz6jbmdbdsao2myn4a_size_400_webp.webp" class="card-img-top" alt="Fire Chicken">
        <div class="card-body">
          <h5 class="card-title">Fire Chicken</h5>
          <p class="card-text">Spicy grilled chicken with Richeese sauce.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 32.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Card 2 -->
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/7/24/ep2dagxzz9js6jdhv4jc9z_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Fire Float</h5>
          <p class="card-text">Spicy fried chicken with a cheesy float.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 35.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection