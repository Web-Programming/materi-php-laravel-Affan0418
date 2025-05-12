<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    //Tampilkan semua data fakultas 
    public function index()
    {
        $data = Fakultas::all();
        return view('fakultas.index', compact('data'));
    }

    //Tampilkan form tambah fakultas
    public function create()
    {
        return view('fakultas.create');
    }

    // Simpan data fakultas baru
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required'
        ]);

        Fakultas::create([
            'nama'=>$request->nama
        ]);

        return redirect()->route('fakultas.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Tampilkan detail fakultas 
    public function show($id)
    {
        echo"Ilmu komputer dan rekayasa";
    } 

    //Tampilkan form edit fakultas
    public function edit($id)
    {
        $data = Fakultas::findOrFail($id);
        return view('fakultas.edit', compact('data'));
    }

    // Update data fakultas
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required'
        ]);

        $data = Fakultas::findOrFail($id);
        $data->update([
            'nama'=>$request->nama
        ]);

        return redirect()->route('fakultas.index')->with('success', 'Data berhasil di perbarui');
    }

    //Hapus data fakultas
    public function destroy($id)
    {
        $data = fakultas::findOrFail($id);
        $data->delete();

         return redirect()->route('fakultas.index')->with('success', 'Data berhasil dihapus.');
         
    }
}
