<?php

use App\Http\Controllers\API\CourseApiController;
use App\Http\Controllers\API\RouteApiController;
use App\Http\Controllers\API\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resource('/user', UserApiController::class);
Route::post('/send-reset-password-mail', [UserApiController::class, 'forgotPassword']);
Route::resource('/course', CourseApiController::class);