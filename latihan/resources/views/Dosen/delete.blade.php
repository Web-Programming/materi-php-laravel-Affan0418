@extends('layout.master')

@section('title', 'Hapus Dosen')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container text-center">
        <h1 class="mb-4 mt-3 text-danger">Konfirmasi Hapus Dosen</h1>
        
        <p class="mb-4">Apakah Anda yakin ingin menghapus <strong>{{ $dosen['nama'] }}</strong>?</p>

        <div class="d-flex justify-content-center gap-3">
            <form action="{{ route('dosen.destroy', $dosen['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus dosen ini?')">Ya, Hapus</button>
            </form>

           <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </div>
</main>
@endsection
