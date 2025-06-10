@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Betafood</h4>
                </div>

                <div class="card-body">
                    <p class="fs-5">
                        Betafood adalah sistem pemesanan makanan di Lagos dengan berbagai restoran untuk dipilih dan beragam jenis makanan.
                        Pesan dan dapatkan pengiriman langsung ke depan pintu Anda.
                    </p>
                    <a href="{{ url('/home') }}" class="btn btn-outline-primary">
                        Lihat Restoran Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
