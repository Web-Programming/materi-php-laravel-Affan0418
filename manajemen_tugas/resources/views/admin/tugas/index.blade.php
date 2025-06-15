@extends('layouts/app')

@section('content')
<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-tasks mr-2"></i>
    {{ $title }}
</h1>

<div class="card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
        <!-- Tombol kiri -->
        <div class="mb-1">
            <a href="#" class="btn btn-sm btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Tambah Data
            </a>
        </div>

        <!-- Tombol kanan -->
        <div class="d-flex gap-2">
            <a href="#" class="btn btn-sm btn-success me-2">
                <i class="fas fa-file-excel mr-2"></i>
                Excel
            </a>
            <a href="#" class="btn btn-sm btn-danger">
                <i class="fas fa-file-pdf mr-2"></i>
                PDF
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tugas</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>
                            <i class="fas fa-cog"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>
                            <span class="badge badge-info badge-pill">01-04-2025</span>
                        </td>
                        <td>
                            <span class="badge badge-info badge-pill">04-04-2025</span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
