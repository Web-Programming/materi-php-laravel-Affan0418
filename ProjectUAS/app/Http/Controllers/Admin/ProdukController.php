<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProdukController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index(Request $request): View
    {
        return view('admin.produk.index');
    }

    /**
     * Show the form for creating a new product.
     */
    public function create(Request $request): View
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi dan simpan produk
        // Produk::create($request->all());

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified product.
     */
    public function show(int $id): View
    {
        // $product = Produk::findOrFail($id);
        // return view('admin.produk.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(int $id): View
    {
        // $produk = Produk::findOrFail($id);
        // return view('admin.produk.edit', compact('produk'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        // $produk = Produk::findOrFail($id);
        // $produk->update($request->all());

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        // $produk = Produk::findOrFail($id);
        // $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
