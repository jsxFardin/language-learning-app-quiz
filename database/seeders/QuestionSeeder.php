<?php

namespace Database\Seeders;

use Harishdurga\LaravelQuiz\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'name' => 'How to say hello in French?',
                'question_type_id' => 2,
            ],
            [
                'name' => 'How to say love in French?',
                'question_type_id' => 2,
            ]
        ];

        Question::insert($questions);
    }
}
