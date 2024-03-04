<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::resource("/", \App\Http\Controllers\HomeController::class);

Route::resource("/dashboard/categories", \App\Http\Controllers\CategoryController::class);
Route::resource("/dashboard/events", \App\Http\Controllers\EventController::class);
Route::resource("/reservation", \App\Http\Controllers\ReservationController::class);
Route::post('dashboard/events/verify/{event}',[\App\Http\Controllers\EventController::class , 'verify'])->name('events.verify');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
