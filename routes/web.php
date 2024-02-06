<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TicketController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route to display the form for creating a trip
Route::get('/trips/create', [TripController::class, 'create'])->name('trips.create');

// Route to handle the submission of the trip creation form
Route::post('/trips/store', [TripController::class, 'store'])->name('trips.store');

// Route to display the list of available trips
Route::get('/trips', [TripController::class, 'index'])->name('trips.index');

// Route to display the details of a specific trip
Route::get('/trips/{trip}', [TripController::class, 'show'])->name('trips.show');

// Route to display the form for purchasing a ticket
Route::get('/tickets/purchase/{trip}', [TicketController::class, 'purchaseForm'])->name('tickets.purchaseForm');

// Route to handle the submission of the ticket purchase form
Route::post('/tickets/purchase/{trip}', [TicketController::class, 'purchase'])->name('tickets.purchase');

// Additional routes for user authentication, if needed
// ...
