<?php

namespace App\Http\Controllers;

use App\Models\Restoran;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $restoran = Restoran::all();

        return view('welcome', ['restoran' => $restoran]);
    }
}