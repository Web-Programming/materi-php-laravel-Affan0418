<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restoran;

class RestoranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restoran::factory()->count(20)->create();
    }
}
