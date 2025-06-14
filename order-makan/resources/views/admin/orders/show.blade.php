@extends('layouts.admin')

@section('title', 'Order Details')
@section('page-title', 'Order #' . $order->id)

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Order Information</h5>
    </div>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-6">
                <p><strong>Order ID:</strong> #{{ $order->id }}</p>
                <p><strong>Order Date:</strong> {{ $order->created_at->format('d M Y H:i') }}</p>
                <p><strong>Customer Name:</strong> {{ $order->user->name }}</p>
                <p><strong>Customer Email:</strong> {{ $order->user->email }}</p>
            </div>
            <div class="col-md-6">
                <p><strong>Delivery Address:</strong> {{ $order->delivery_address }}</p>
                <p><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>
                <p><strong>Status:</strong> 
                    <span class="badge 
                        @if($order->status == 'completed') bg-success 
                        @elseif($order->status == 'cancelled') bg-danger 
                        @elseif($order->status == 'processing') bg-warning 
                        @else bg-info @endif">
                        {{ ucfirst($order->status) }}
                    </span>
                </p>
            </div>
        </div>
        
        <h5 class="mb-3">Order Items</h5>
        <div class="table-responsive mb-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->pivot->quantity }}</td>
                        <td>Rp {{ number_format($product->pivot->price, 0, ',', '.') }}</td>
                        <td>Rp {{ number_format($product->pivot->price * $product->pivot->quantity, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">Subtotal:</th>
                        <th>Rp {{ number_format($order->total_price, 0, ',', '.') }}</th>
                    </tr>
                    <tr>
                        <th colspan="3" class="text-end">Delivery Fee:</th>
                        <th>Rp 10.000</th>
                    </tr>
                    <tr>
                        <th colspan="3" class="text-end">Total:</th>
                        <th>Rp {{ number_format($order->total_price + 10000, 0, ',', '.') }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        <h5 class="mb-3">Update Order Status</h5>
        <form action="{{ route('admin.orders.update-status', $order) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <select class="form-select" name="status">
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                        <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection