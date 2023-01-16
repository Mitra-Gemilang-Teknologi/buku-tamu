<?php

namespace Database\Seeders;

use App\Models\OpsiJawaban;
use Illuminate\Database\Seeder;

class OpsiJawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OpsiJawaban::create([
            'nilai_jawaban' => 1,
            'deskripsi_jawaban' => 'Tidak Mudah',
            'icon' => 'd.png',
        ]);

        OpsiJawaban::create([
            'nilai_jawaban' => 2,
            'deskripsi_jawaban' => 'Kurang Mudah',
            'icon' => 'c.png',
        ]);

        OpsiJawaban::create([
            'nilai_jawaban' => 3,
            'deskripsi_jawaban' => 'Mudah',
            'icon' => 'b.png',
        ]);

        OpsiJawaban::create([
            'nilai_jawaban' => 4,
            'deskripsi_jawaban' => 'Sangat Mudah',
            'icon' => 'a.png',
        ]);
    }
}
