<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Harishdurga\LaravelQuiz\Database\Seeders\QuestionTypeSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            QuestionTypeSeeder::class,
            QuestionSeeder::class,
            QuestionOptionSeeder::class,
            QuizSeeder::class,
            QuizQuestionSeeder::class,
        ]);
    }
}
