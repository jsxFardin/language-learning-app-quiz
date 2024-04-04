<?php

namespace Database\Seeders;

use Harishdurga\LaravelQuiz\Models\QuizQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'quiz_id' => 1,
                'question_id' => 1,
                'marks' => 3,
                'order' => 1,
                'negative_marks'=>1,
                'is_optional'=>false
            ],
            [
                'quiz_id' => 1,
                'question_id' => 2,
                'marks' => 3,
                'order' => 2,
                'negative_marks'=>1,
                'is_optional'=>false
            ],
        ];

        QuizQuestion::insert($data);
    }
}
