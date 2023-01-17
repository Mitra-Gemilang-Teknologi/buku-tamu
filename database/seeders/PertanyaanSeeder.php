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
            'question_description' => 'Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?',
            'question_image' => '3.jpg',
        ]);

        Pertanyaan::create([
            'question_description' => 'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?',
            'question_image' => '4.jpg',
        ]);

        Pertanyaan::create([
            'question_description' => 'Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?',
            'question_image' => '5.jpg',
        ]);

        Pertanyaan::create([
            'question_description' => 'Bagimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standard pelayanan dengan hasil yang diberikan?',
            'question_image' => '6.jpg',
        ]);

        Pertanyaan::create([
            'question_description' => 'Bagaimana Kesesuaian biaya dengan aturan tarif layanan? (Apabila pelayanan tidak dipungut biaya/gratis dipilih Sesuai)',
            'question_image' => '7.jpg',
        ]);

        Pertanyaan::create([
            'question_description' => 'Bagaimana pendapat Saudara tentang kompetensi / kemampuan petugas dalam pelayanan?',
            'question_image' => '8.jpg',
        ]);

        Pertanyaan::create([
            'question_description' => 'Bagaimana pendapat Saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?',
            'question_image' => '9.jpg',
        ]);

        Pertanyaan::create([
            'question_description' => 'Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?',
            'question_image' => '10.jpg',
        ]);

        Pertanyaan::create([
            'question_description' => 'Bagaimana pendapat Saudara tentang penanganan pengaduan dan penggunaan layanan?',
            'question_image' => '11.jpg',
        ]);
    }
}
