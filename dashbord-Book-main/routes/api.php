<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// مجموعة مسارات المصادقة
Route::prefix('auth')->group(function () {
    // تسجيل مستخدم جديد
    Route::post('/register', [AuthController::class, 'register']);

    // تسجيل الدخول
    Route::post('/login', [AuthController::class, 'login']);

    // مسارات تتطلب مصادقة
    Route::middleware('auth:api')->group(function () {
        // الحصول على بيانات المستخدم الحالي
        Route::get('/me', [AuthController::class, 'me']);

        // تسجيل الخروج
        Route::post('/logout', [AuthController::class, 'logout']);

        // تجديد الـ token
        Route::post('/refresh', [AuthController::class, 'refresh']);
    });
});