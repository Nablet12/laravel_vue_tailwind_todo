<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('project', \App\Http\Controllers\ProjectController::class);
Route::resource('task', \App\Http\Controllers\TaskController::class);
Route::resource('note', \App\Http\Controllers\NoteController::class);
Route::resource('quote', \App\Http\Controllers\QuoteController::class);