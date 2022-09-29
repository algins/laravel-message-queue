<?php

use App\Http\Controllers\AddMessageController;
use App\Http\Controllers\ForgetMessageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReleaseMessageController;
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

Route::resource('/', MessageController::class)->only('index');
Route::post('add', AddMessageController::class)->name('add');
Route::post('forget/{uuid}', ForgetMessageController::class)->name('forget');
Route::post('release/{uuid}', ReleaseMessageController::class)->name('release');
