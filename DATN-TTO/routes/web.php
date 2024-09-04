<?php

use App\Http\Controllers\admin\AssignmentController;
use App\Http\Controllers\admin\AttemptController;
use App\Http\Controllers\admin\ChapterController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\FeedbackCourseController;
use App\Http\Controllers\admin\FeedbackSupportController;
use App\Http\Controllers\admin\LessonController;
use App\Http\Controllers\admin\MessagesController;
use App\Http\Controllers\admin\PostCategoriesController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\RouteController;
use App\Http\Controllers\admin\StudentAnswerController;
use App\Http\Controllers\admin\TimelineController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\VideoLessonController;
use App\Http\Controllers\admin\WalletsController;
use App\Models\Lesson;
use App\Models\Timeline;
use App\Models\Wallet;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    // AssignmentController
    Route::resource('/Assignment', AssignmentController::class);
    //AttemptsController
    Route::resource('/Attempts', AttemptController::class);
    //ChapterController
    Route::resource('/Chapter', ChapterController::class);
    //CommentController
    Route::resource('/Comment', CommentController::class);
    //CourseController
    Route::resource('/Course', CourseController::class);
    //FeedbackCourseController
    Route::resource('/Feedback-course', FeedbackCourseController::class);
    //FeedbackSupportController
    Route::resource('/Feedback-support', FeedbackSupportController::class);
    //LessonController
    Route::resource('/Lesson', LessonController::class);
    //MessagesController
    Route::resource('/Messages', MessagesController::class);
    //PostCategoriesController
    Route::resource('/PostCategoties', PostCategoriesController::class);
    //PostController
    Route::resource('/Post', PostController::class);
    //RouteController
    Route::resource('/Route', RouteController::class);
    //StudentAnswerController
    Route::resource('/StudentAnswers', StudentAnswerController::class);
    //TimelineController
    Route::resource('/Timeline', TimelineController::class);
    //TransactionController
    Route::resource('/Transaction', TransactionController::class);
    //UserController
    Route::resource('/user', UserController::class);
    //VideoLesssonController
    Route::resource('/VideoLesson', VideoLessonController::class);
    //WalletsController
    Route::resource('/Wallets', WalletsController::class);
});