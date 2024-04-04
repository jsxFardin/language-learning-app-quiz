<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Harishdurga\LaravelQuiz\Models\Quiz;
use Harishdurga\LaravelQuiz\Models\QuizAttempt;
use Harishdurga\LaravelQuiz\Models\QuizAttemptAnswer;
use Illuminate\Http\Request;
use Harishdurga\LaravelQuiz\Models\Question;
use Harishdurga\LaravelQuiz\Models\UserAnswer;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        
        return view('quiz.index', compact('quizzes'));
    }

    public function start(){

        if(empty(request('quiz_id'))){
            return redirect()->route('quiz.index')->with('error', 'Please select a quiz');
        }
        $quiz = Quiz::find(request()->quiz_id);
        return view('quiz.start', compact('quiz'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'quiz_id' => 'required',
            'question' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $user = auth()->id() ?? 1;
            $quiz_attempt = QuizAttempt::create([
                'quiz_id' => $request->quiz_id,
                'participant_id' => $user,
                'participant_type' => 'App\Models\User',
            ]);

            foreach ($request->question as $key => $value) {
                QuizAttemptAnswer::create([
                    'quiz_attempt_id' => $quiz_attempt->id,
                    'quiz_question_id' => $key,
                    'question_option_id' => $value,
                ]);
            }
            DB::commit();
            Toastr::success('Quiz Attempted successfully!', 'Success');

            return view('quiz.result', compact('quiz_attempt'));
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            Toastr::error($th->getMessage(), 'Toastr::Error');
            return redirect()->route('quiz.index')->with('error', $th->getMessage());
        }

    }
}
