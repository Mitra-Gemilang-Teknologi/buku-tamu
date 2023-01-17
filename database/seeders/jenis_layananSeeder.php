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
            'service_name' => 'Kelautan & Perikanan'
        ]);

        JenisLayanan::create([
            'service_name' => 'Lingkungan Hidup'
        ]);

        JenisLayanan::create([
            'service_name' => 'Energi dan Sumber Daya Mineral'
        ]);

        JenisLayanan::create([
            'service_name' => 'Tenaga Kerja'
        ]);

        JenisLayanan::create([
            'service_name' => 'Pendidikan'
        ]);

        JenisLayanan::create([
            'service_name' => 'Kesehatan'
        ]);

        JenisLayanan::create([
            'service_name' => 'Perhubungan'
        ]);

        JenisLayanan::create([
            'service_name' => 'Perdagangan'
        ]);

        JenisLayanan::create([
            'service_name' => 'Kehutanan'
        ]);

        JenisLayanan::create([
            'service_name' => 'Sosial'
        ]);

        JenisLayanan::create([
            'service_name' => 'Pertanian'
        ]);

        JenisLayanan::create([
            'service_name' => 'Pekerjaan Umum dan Penataan Ruang'
        ]);
    }
}
