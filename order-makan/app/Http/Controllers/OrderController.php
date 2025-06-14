<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        if ($order->user_id != Auth::id() && !Auth::user()->isAdmin()) {
            abort(403);
        }

        return view('orders.show', compact('order'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
            'payment_method' => 'required|in:cash,transfer',
        ]);

        $total = 0;
        $products = [];

        foreach ($request->products as $item) {
            $product = Product::find($item['id']);
            $total += $product->price * $item['quantity'];
            $products[$product->id] = [
                'quantity' => $item['quantity'],
                'price' => $product->price,
            ];
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $total,
            'status' => 'pending',
            'payment_method' => $request->payment_method,
            'delivery_address' => Auth::user()->address,
        ]);

        $order->products()->attach($products);

        return redirect()->route('orders.show', $order)->with('success', 'Order placed successfully!');
    }

    // Admin methods
    public function adminIndex()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,completed,cancelled',
        ]);

        $order->update(['status' => $request->status]);

        return back()->with('success', 'Order status updated.');
    }
}