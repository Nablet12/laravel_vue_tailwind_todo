<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('project',[\App\Http\Controllers\api\ProjectController::class, 'index']);
Route::post('project',[\App\Http\Controllers\api\ProjectController::class, 'store']);
Route::put('project/{id}',[\App\Http\Controllers\api\ProjectController::class, 'update']);
Route::delete('project/{id}',[\App\Http\Controllers\api\ProjectController::class, 'delete']);

Route::get('task',[\App\Http\Controllers\api\TaskController::class, 'index']);
Route::post('task',[\App\Http\Controllers\api\TaskController::class, 'store']);
Route::put('task/{id}',[\App\Http\Controllers\api\TaskController::class, 'update']);
Route::delete('task/{id}',[\App\Http\Controllers\api\TaskController::class, 'delete']);

Route::get('note',[\App\Http\Controllers\api\NoteController::class, 'index']);
Route::post('note',[\App\Http\Controllers\api\NoteController::class, 'store']);
Route::put('note/{id}',[\App\Http\Controllers\api\NoteController::class, 'update']);
Route::delete('note/{id}',[\App\Http\Controllers\api\NoteController::class, 'delete']);

Route::get('quote',[\App\Http\Controllers\api\QuoteController::class, 'index']);
Route::post('quote',[\App\Http\Controllers\api\QuoteController::class, 'store']);
Route::put('quote/{id}',[\App\Http\Controllers\api\QuoteController::class, 'update']);
Route::delete('quote/{id}',[\App\Http\Controllers\api\QuoteController::class, 'delete']);
