<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Services\Cart;
use Illuminate\Support\Facades\Session;

class ProdukController extends Controller
{
    public function getIndex()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    public function getAddToCart(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($produk, $produk->id);

        $request->session()->put('cart', $cart);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
}
