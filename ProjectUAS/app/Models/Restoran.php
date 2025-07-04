<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restoran extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'image', 
    ];
}
