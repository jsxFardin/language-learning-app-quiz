<?php

namespace Database\Seeders;

use Harishdurga\LaravelQuiz\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::create([
            'name' => 'Franch Language Quiz',
            'description' => 'Test your knowledge of Franch language',
            'slug' => 'franch-language-quiz',
            'time_between_attempts' => 0, //Time in seconds between each attempt
            'total_marks' => 10,
            'pass_marks' => 6,
            'max_attempts' => 1,
            'is_published' => 1,
            'valid_from' => now(),
            'valid_upto' => now()->addDay(5),
            'media_url'=>'',
            'media_type'=>'',
            'negative_marking_settings'=>[
                'enable_negative_marks' => true,
                'negative_marking_type' => 'fixed',
                'negative_mark_value' => 0,
            ]
        ]);
    }
}
