<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pertanyaan::create([
            'deskripsi_pertanyaan' => 'Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?',
            'gambar' => '3.jpg',
        ]);

        Pertanyaan::create([
            'deskripsi_pertanyaan' => 'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?',
            'gambar' => '4.jpg',
        ]);

        Pertanyaan::create([
            'deskripsi_pertanyaan' => 'Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?',
            'gambar' => '5.jpg',
        ]);

        Pertanyaan::create([
            'deskripsi_pertanyaan' => 'Bagimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standard pelayanan dengan hasil yang diberikan?',
            'gambar' => '6.jpg',
        ]);

        Pertanyaan::create([
            'deskripsi_pertanyaan' => 'Bagaimana Kesesuaian biaya dengan aturan tarif layanan? (Apabila pelayanan tidak dipungut biaya/gratis dipilih Sesuai)',
            'gambar' => '7.jpg',
        ]);

        Pertanyaan::create([
            'deskripsi_pertanyaan' => 'Bagaimana pendapat Saudara tentang kompetensi / kemampuan petugas dalam pelayanan?',
            'gambar' => '8.jpg',
        ]);

        Pertanyaan::create([
            'deskripsi_pertanyaan' => 'Bagaimana pendapat Saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?',
            'gambar' => '9.jpg',
        ]);

        Pertanyaan::create([
            'deskripsi_pertanyaan' => 'Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?',
            'gambar' => '10.jpg',
        ]);

        Pertanyaan::create([
            'deskripsi_pertanyaan' => 'Bagaimana pendapat Saudara tentang penanganan pengaduan dan penggunaan layanan?',
            'gambar' => '11.jpg',
        ]);
    }
}
