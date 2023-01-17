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
            'answer_value' => 1,
            'answer_description' => 'Tidak Mudah',
            'answer_icon' => 'd.png',
        ]);

        OpsiJawaban::create([
            'answer_value' => 2,
            'answer_description' => 'Kurang Mudah',
            'answer_icon' => 'c.png',
        ]);

        OpsiJawaban::create([
            'answer_value' => 3,
            'answer_description' => 'Mudah',
            'answer_icon' => 'b.png',
        ]);

        OpsiJawaban::create([
            'answer_value' => 4,
            'answer_description' => 'Sangat Mudah',
            'answer_icon' => 'a.png',
        ]);
    }
}
