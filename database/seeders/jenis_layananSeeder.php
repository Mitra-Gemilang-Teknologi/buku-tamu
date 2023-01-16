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
            'nama_jenis_layanan' => 'REKOMENDASI SURAT PERSYARATAN PEGAWAI / TNI / POLRI'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'REKOMENDASI PENGANTAR PERUBAHAN SURAT PEMBERITAHUAN PAJAK TERHUTANG (SPPT)'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'PEMBAYARAN PBB (PAJAK BUMI & BANGUNAN)'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'REKOMENDASI SURAT KETERANGAN TIDAK MAMPU (SKTM)'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'PERMOHONAN SURAT DISPENSASI NIKAH'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'REKOMENDASI PERMOHONAN IJIN KERAMAIAN / HIBURAN'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'SURAT KETERANGAN WARIS'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'REKOMENDASI SURAT JALAN / BEPERGIAN'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'REKOMENDASI PROPOSAL BANTUAN SOSIAL/AGAMA'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'LAYANAN DATA DAN INFORMASI'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'LAYANAN SOSIALISASI'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'LAYANAN KONSULTASI'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'LAYANAN PENGADUAN PELAYANAN PUBLIK'
        ]);

        JenisLayanan::create([
            'nama_jenis_layanan' => 'REKOMENDASI PENCAIRAN DANA DESA (DD)'
        ]);
    }
}
