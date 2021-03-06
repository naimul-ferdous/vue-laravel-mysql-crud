<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FeedbackController;

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
