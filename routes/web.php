<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// web.php
// routes/web.php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\TicketController;

// Routes pour les vols
Route::get('/', [FlightController::class, 'index'])->name('flights.index');
Route::get('/flights/create', [FlightController::class, 'create'])->name('flights.create');
Route::post('/flights', [FlightController::class, 'store'])->name('flights.store');
Route::get('/flights/{flight}/edit', [FlightController::class, 'edit'])->name('flights.edit');
Route::put('/flights/{flight}', [FlightController::class, 'update'])->name('flights.update');
Route::delete('/flights/{flight}', [FlightController::class, 'destroy'])->name('flights.destroy');


// Routes pour les billets
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/tickets/{ticket}/edit', [TicketController::class, 'edit'])->name('tickets.edit');
Route::put('/tickets/{ticket}', [TicketController::class, 'update'])->name('tickets.update');
Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');