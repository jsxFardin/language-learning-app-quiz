<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/quiz/start', [QuizController::class, 'start'])->name('quiz.start');
Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');