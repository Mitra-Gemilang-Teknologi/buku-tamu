<?php

namespace Database\Seeders;

use App\Models\JenisLayanan;
use Illuminate\Database\Seeder;

class jenis_layananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisLayanan::create([
            'nama_jenis_layanan' => 'Personal'
        ]);
    }
}
