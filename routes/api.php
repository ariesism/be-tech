<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    AuthController,
    PostController
};

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

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::group([
    'middleware' => 'auth:sanctum',
], function () {
    Route::apiResource('/posts', PostController::class)->only(['index', 'store']);
});

Route::fallback(function() {
    abort(404, 'API resource not found');
});