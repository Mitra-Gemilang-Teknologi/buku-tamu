<?php

namespace Database\Seeders;

use App\Models\AnswerOption;
use Illuminate\Database\Seeder;

class AnswerOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnswerOption::create([
            'answer_value' => 1,
            'answer_description' => 'Tidak Mudah',
            'answer_icon' => 'd.png',
        ]);

        AnswerOption::create([
            'answer_value' => 2,
            'answer_description' => 'Kurang Mudah',
            'answer_icon' => 'c.png',
        ]);

        AnswerOption::create([
            'answer_value' => 3,
            'answer_description' => 'Mudah',
            'answer_icon' => 'b.png',
        ]);

        AnswerOption::create([
            'answer_value' => 4,
            'answer_description' => 'Sangat Mudah',
            'answer_icon' => 'a.png',
        ]);
    }
}
