<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\GoalController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/task', [TaskController::class, 'create']);
Route::post('/storetask', [TaskController::class, 'store']);
Route::delete('/task/{task}', [TaskController::class, 'destroy']);

Route::get('/profile', [ProfileController::class, 'create']);

Route::get('/journals', [JournalController::class, 'index']);
Route::get('/journal', [JournalController::class, 'create']);
Route::post('/storejournal', [JournalController::class, 'store']);

Route::get('/goals', [GoalController::class, 'index']);
Route::get('/goal', [GoalController::class, 'create']);
Route::post('/storegoal', [GoalController::class, 'store']);