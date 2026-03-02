<?php

use App\Http\Controllers\ImageGenerationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/", function (Request $request) {
    return response()->json([
        "message" => "Welcome to the Image Generation API",
        "version" => "1.0.0"
    ]);
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('v1')->group(callback: function () {
        Route::get('/user', function (Request $request) {
            return $request->user() ?? 'NO USER';
        });

        Route::apiResource('image-generation', ImageGenerationController::class)->only(['index', 'store']);
    });
});
