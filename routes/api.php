<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ECMemberController;
use App\Http\Controllers\FooterController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//categories api
// Route::middleware('api')->group(function () {
//     Route::resource('categories', CategoryController::class);
// });


//products api
Route::middleware('api')->group(function () {
    Route::resource('products', ProductController::class);
});

//posts api
Route::middleware('api')->group(function () {
    Route::resource('posts', PostController::class);
});

//feedbacks api
Route::middleware('api')->group(function () {
    Route::resource('feedbacks', FeedbackController::class);
});

//students api
Route::middleware('api')->group(function () {
    Route::resource('students', StudentController::class);
});

//videos api
Route::middleware('api')->group(function () {
    Route::resource('videos', YoutubeController::class);
});

//teachers api
Route::middleware('api')->group(function () {
    Route::resource('teachers', TeacherController::class);
});


//events api
Route::middleware('api')->group(function () {
    Route::resource('events', EventController::class);
});

//programs api
Route::middleware('api')->group(function () {
    Route::resource('programs', ProgramController::class);
});

//ecmembers api
Route::middleware('api')->group(function () {
    Route::resource('ecmembers', ECMemberController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('footer', FooterController::class);
});

//send-mail api
Route::middleware('api')->group(function () {
    Route::resource('send-mail', MailController::class);
});
