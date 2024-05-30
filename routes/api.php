<?php

use App\Http\Controllers\BookingsController;
use App\Models\Bookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::resource('/booking', BookingsController::class);
Route::get('/getBooking/{id}', [BookingsController::class, 'getBooking']);
