<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TaskCompleteController;
use App\Http\Controllers\Api\V1\TaskController;

Route::prefix('v1')->group(function (){
    Route::apiResource('/tasks', TaskController::class);
    Route::patch('/tasks/{task}/complete', TaskCompleteController::class);
});