@extends('layouts.admin')

@section('title', 'Add New Product')
@section('page-title', 'Add New Product')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Product Information</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="">Select Category</option>
                        <option value="chicken">Chicken</option>
                        <option value="burger">Burger</option>
                        <option value="rice">Rice</option>
                        <option value="drink">Drink</option>
                        <option value="snack">Snack</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured">
                <label class="form-check-label" for="is_featured">Featured Product</label>
            </div>
            <button type="submit" class="btn btn-primary">Save Product</button>
        </form>
    </div>
</div>
@endsection