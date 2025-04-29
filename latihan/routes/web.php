<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/profil", function(){
    return view('profil');

});

Route::get("/berita/:id", function($id){
    return view("berita", ['id' => $id]);
});

Route::get('/total/{angka1}/{angka2}', function($angka1, $angka2){
    $total = $angka1 + $angka2;
    return view('hasil', ['total' => $total]);
});
