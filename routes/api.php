<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/accommodations', [AccommodationController::class, 'index'])->name('accommodations.index');
Route::get('/accommodations/{id}', [AccommodationController::class, 'show'])->name('accommodations.show');
Route::post('/accommodations/add', [AccommodationController::class, 'store'])->name('accommodations.store');
Route::delete('/accommodations/delete/{id}', [AccommodationController::class, 'destroy'])->name('accommodations.destroy');

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('bookings.show');
Route::post('/bookings/add', [BookingController::class, 'store'])->name('bookings.store');
Route::put('/bookings/update/{id}', [BookingController::class, 'update'])->name('bookings.update');