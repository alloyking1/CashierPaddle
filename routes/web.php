<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeTrackerController;
use App\Http\Controllers\SubscriptionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [TimeTrackerController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('/time')->group(function(){
    Route::post('/start', [TimeTrackerController::class, 'start'])->name('time-tracker.start');
    Route::post('/stop/{entry}', [TimeTrackerController::class, 'stop'])->name('time-tracker.stop');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
