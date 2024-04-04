<?php

namespace Database\Seeders;

use Harishdurga\LaravelQuiz\Models\QuestionType;
use Illuminate\Database\Seeder;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionTypes = [
            [
                'name' => 'English',
            ],
            [
                'name' => 'French',
            ],
            [
                'name' => 'Spanish',
            ]
        ];
        foreach ($questionTypes as $questionType) {
            QuestionType::create($questionType);
        }
    }
}
