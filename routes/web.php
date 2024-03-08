<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::resource("/home", \App\Http\Controllers\HomeController::class);
Route::get('/events/{event}', [\App\Http\Controllers\EventController::class, 'show'])->name('events.shows');
//Route::get('/events/organisateur/{user}', [\App\Http\Controllers\EventController::class, 'eventbyorganiser']);
Route::post('/revokeReservation/{user}', [\App\Http\Controllers\PermissionController::class, 'revokeReservation'])->name('revokeReservation');
Route::post('/giveReservation/{user}', [\App\Http\Controllers\PermissionController::class, 'giveReservation'])->name('giveReservation');

Route::post('/reservation/valider{reservation}', [\App\Http\Controllers\ReservationController::class, 'valider'])->name('valider');
Route::post('/reservation/decline/{reservation}', [\App\Http\Controllers\ReservationController::class, 'decline'])->name('decline');

Route::resource("/dashboard/events", \App\Http\Controllers\EventController::class);
Route::resource("/dashboard/users", \App\Http\Controllers\UserController::class);
Route::resource("/reservation", \App\Http\Controllers\ReservationController::class);
Route::post('dashboard/events/verify/{event}', [\App\Http\Controllers\EventController::class, 'verify'])->name('events.verify');

Route::middleware(['auth','role:admin'])->group(function () {
    Route::resource("/dashboard/categories", \App\Http\Controllers\CategoryController::class);


});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
