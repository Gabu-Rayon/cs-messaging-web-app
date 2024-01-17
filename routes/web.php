<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MessageController::class,'index'])->name('messages.index');

Route::get('/messages', [MessageController::class,'messages'])->name('all.messages');
Route::get('/agents', [MessageController::class,'agents'])->name('all.agents');
Route::get('/replied', [MessageController::class,'replied'])->name('replied.messages');
Route::get('/waiting', [MessageController::class,'waiting'])->name('unreplied.messages');
Route::get('/reply', [MessageController::class,'reply'])->name('reply.message');

Route::post('/reply', [MessageController::class,'store'])->name('reply.store');