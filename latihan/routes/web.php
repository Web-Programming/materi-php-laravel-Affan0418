<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

// Route::get('/profile', function () {
//     return view('Profile');
// });

//Route::get('/', function () {
//    return view('welcome');
//});

// Route::get("/berita/{id}/{title?}", function($id, $title = NULL) {
//     return view("Berita", ['id' => $id, 'title' => $title]);
// });

// Route::get("/total/{angka1}/{angka2}/{angka3?}", function($angka1, $angka2, $angka3 = 0) {
//     return view("Hasil", [
//         'total' => $angka1 + $angka2 + $angka3,
//         'angka1' => $angka1,
//         'angka2' => $angka2,
//         'angka3' => $angka3
//     ]);
// });

// ---------------------------------- BATAS SUCI --------------------------------------

// Route::get('/dosen',function(){
//     return view('dosen');
// });

// Route::get('/dosen/index',function(){
//     return view('dosen.index');
// });

// Route::get('/fakultas',function(){
//      return view('fakultas.index',["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);

//      return view('fakultas.index',["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa","Fakultas ilmu ekonomi"]]);

//      return view('fakultas.index')->with("fakultas",["Fakultas ilmu komputer dan rekayasa","Fakultas ilmu ekonomi"]);

//      $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"];
//      return view('fakultas.index',compact('fakultas'));

//      $fakultas =["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"];
//     return view('fakultas.index',compact('fakultas'));

//     $kampus = "Universitas Multi Data Palembamg";
//     $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"];
//     return view('fakultas.index',compact('fakultas','kampus'));
// });

// Route::get('/latihan/index',[MateriController::class,'index']);

// Route::get('/latihan/detail/{id}',[MateriController::class,'detail']);

// Route::resource(name:'prodi',controller:prodiController::class);

// Route::apiResource('api/mhs',MhsApiController::class);

// ---------------------------------- BATAS SUCI --------------------------------------

// ROUTE TERBUKA (Tanpa login)
Route::get('/', fn () => view('home'))->name('layout.home');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'do_login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'do_register']);

// ROUTE DENGAN LOGIN (middleware: auth)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard sesuai level
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // Prodi
    Route::resource('prodi', ProdiController::class);

    // Dosen
    Route::get('/dosen/{id}/delete', [DosenController::class, 'confirmDelete'])->name('dosen.confirmDelete');
    Route::resource('dosen', DosenController::class);

    // Fakultas
    Route::get('/fakultas/{id}/detail', [FakultasController::class, 'detail'])->name('fakultas.detail');
    Route::resource('fakultas', FakultasController::class);

    // Mahasiswa
    Route::get('/mhs/{id}/detail', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');
    Route::get('/mhs/create', [MahasiswaController::class, 'createForm'])->name('mahasiswa.create');
    Route::delete('/mhs/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
    Route::get('/mhs', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

    // Materi
    Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
    Route::get('/materi/{id}/detail', [MateriController::class, 'detail'])->name('materi.detail');
    Route::get('/materi/create', [MateriController::class, 'createForm'])->name('materi.create');
    Route::delete('/materi/{id}', [MateriController::class, 'destroy'])->name('materi.destroy');
});