<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\PaintController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Models\Test;
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
})->name('home');

Route::get('tasks1-2', [TasksController::class, 'index'])->name('tasks');

Route::get('tasks3', [UserController::class, 'index'])->name('tasks3');
Route::post('tasks3', [UserController::class, 'store'])->name('tasks3.store');
Route::get('ajax', [AjaxController::class, 'index'])->name('ajax.index');
Route::post('ajax', [AjaxController::class, 'store'])->name('ajax.store');
Route::get('tasks3/show', [UserController::class, 'show'])->name('tasks3.show');
Route::get('tasks3/data', [UserController::class, 'getData'])->name('tasks3.data');

Route::get('/download', [DownloadsController::class, 'download'])->name('download');

Route::get('/task5', [TestController::class, 'index'])->name('task5');
Route::get('/task5/{test}/questions', [TestController::class, 'show'])->name('task5.show');
Route::get('/task5/{test}/questions/{question}', [TestController::class, 'types'])->name('task5.types');


Route::get('paint', [PaintController::class, 'index'])->name('paint');


