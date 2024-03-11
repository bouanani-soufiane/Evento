<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:organiser'])->group(function () {
    Route::post('/reservation/valider{reservation}', [\App\Http\Controllers\ReservationController::class, 'valider'])->name('valider');
    Route::post('/reservation/decline/{reservation}', [\App\Http\Controllers\ReservationController::class, 'decline'])->name('decline');

});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource("/dashboard/categories", \App\Http\Controllers\CategoryController::class);
    Route::resource("/dashboard/users", \App\Http\Controllers\UserController::class);
    Route::post('dashboard/events/verify/{event}', [\App\Http\Controllers\EventController::class, 'verify'])->name('events.verify');
    Route::post('/revokeReservation/{user}', [\App\Http\Controllers\PermissionController::class, 'revokeReservation'])->name('revokeReservation');
    Route::post('/giveReservation/{user}', [\App\Http\Controllers\PermissionController::class, 'giveReservation'])->name('giveReservation');
    Route::post('/blockuser/{user}', [\App\Http\Controllers\PermissionController::class, 'blockuser'])->name('blockuser');
    Route::post('/deblockuser/{user}', [\App\Http\Controllers\PermissionController::class, 'deblockuser'])->name('deblockuser');
    Route::post('/removeCreateEvent/{user}', [\App\Http\Controllers\PermissionController::class, 'removeCreateEvent'])->name('removeCreateEvent');
    Route::post('/giveCreateEvent/{user}', [\App\Http\Controllers\PermissionController::class, 'giveCreateEvent'])->name('giveCreateEvent');
    Route::post('/deleteUser/{user}', [\App\Http\Controllers\UserController::class, 'deleteUser'])->name('deleteUser');
    Route::post('/restoreUser/{user}', [\App\Http\Controllers\UserController::class, 'restoreUser'])->name('restoreUser');
    Route::post('/deleteUserForever/{user}', [\App\Http\Controllers\UserController::class, 'deleteUserForever'])->name('deleteUserForever');
});


Route::middleware(['auth', 'role:organiser|admin'])->group(function () {
    Route::resource("/dashboard/events", \App\Http\Controllers\EventController::class);
});


Route::middleware(['auth', 'role:participant|organiser'])->group(function () {
    Route::get('/events/{event}', [\App\Http\Controllers\EventController::class, 'show'])->name('events.shows');
    Route::get('generatePdf', [\App\Http\Controllers\PDFController::class, 'generatePDF'])->name('pdf');
    Route::get('generatePdfIndex', [\App\Http\Controllers\PDFController::class, 'index']);
    Route::get('/ticket', [\App\Http\Controllers\TicketController::class, 'index'])->name('ticket.index');
    Route::resource("/reservation", \App\Http\Controllers\ReservationController::class);
});


Route::resource("/home", \App\Http\Controllers\HomeController::class);
Route::get('/event/search', [\App\Http\Controllers\HomeController::class, 'search'])->name('search');


require __DIR__ . '/auth.php';
