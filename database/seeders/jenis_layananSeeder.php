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
            'nama_jenis_layanan' => 'Kelautan & Perikanan'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Lingkungan Hidup'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Energi dan Sumber Daya Mineral'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Tenaga Kerja'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Pendidikan'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Kesehatan'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Perhubungan'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Perdagangan'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Kehutanan'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Sosial'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Pertanian'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'Pekerjaan Umum dan Penataan Ruang'
        ]);
    }
}
