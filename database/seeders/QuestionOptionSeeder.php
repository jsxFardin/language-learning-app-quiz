<?php

namespace Database\Seeders;

use Harishdurga\LaravelQuiz\Models\QuestionOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'question_id' => 1,
                'name' => 'Option 1',
                'is_correct' => false,
            ],
            [
                'question_id' => 1,
                'name' => 'Bonjour',
                'is_correct' => true,
            ],
            [
                'question_id' => 1,
                'name' => 'Option 3',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'name' => 'Option 1',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'name' => 'Option 2',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'name' => 'amour',
                'is_correct' => true,
            ]
        ];

        QuestionOption::insert($data);
    }
}
